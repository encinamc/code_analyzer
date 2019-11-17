<?php

Class CodeCompare 
{
	private $mainFile;
	private $filedata;

	public function __construct($mainFile, $fileMap) 
	{
		$this->filedata = array();

		$this->filedata["path"] = array_values($fileMap);
		$this->filedata["alias"] = array_keys($fileMap);
		$this->mainFile = $mainFile;
	}

	public function getFileData() 
	{
		return $this->filedata;
	}

	public function init()
	{
		$mainCode = $this->fileToCodeStr($this->mainFile);
		$mainCodeH = $this->harmonizeVariables($mainCode);
		$mainCodeSH = $this->simpleHarmonizeVariables($mainCode);
		$mainCodeArr = $this->codeStrToArray( $mainCode );
		$mainCodeHArr = $this->codeStrToArray(str_replace(' ', '', $mainCodeH ));
		$mainCodeSHArr = $this->codeStrToArray(str_replace(' ', '', $mainCodeSH ));

		foreach($this->filedata["path"] as $key => $path)
		{
			$vsCode = $this->fileToCodeStr($path);
			$vsCodeH = $this->harmonizeVariables($vsCode);
			$vsCodeSH = $this->simpleHarmonizeVariables($vsCode);
			$vsCodeArr = $this->codeStrToArray( $vsCode );
			$vsCodeHArr = $this->codeStrToArray(str_replace(' ', '', $vsCodeH ));
			$vsCodeSHArr = $this->codeStrToArray(str_replace(' ', '', $vsCodeSH ));

			$origs = array();
			$origs[0] = $mainCodeArr;
			$origs[1] = $vsCodeArr;

			$redFlag[$key] = $this->codeCompare($mainCodeHArr, $vsCodeHArr, $this->filedata["alias"][$key], true, $origs );
			$yellowFlag[$key] = $this->codeCompare($mainCodeSHArr, $vsCodeSHArr, $this->filedata["alias"][$key], false, $origs);
	
	/* DEBUG
			$this->pretty_dump($mainCodeHArr);
			$this->pretty_dump($vsCodeHArr);
			$this->pretty_dump($mainCodeSHArr);
			$this->pretty_dump($vsCodeSHArr);
			die();
	*/
		}

		return [
			'redFlag' => $redFlag,
			'yellowFlag' => $yellowFlag
		];
	}


	private function codeCompare($c1, $c2, $vs, $harmonize = true, $origcodes = array())
	{
		$c2_count = count($c2);
		$result = array();
		$c1_count = count($c1) ; // no of "lines" of main file
		$result[0] = ""; // comparison of lines. Main File VS File (B)
		$result[1] = array(); // collected lines that is similar or identical
		$result[2] = array(); // collected lines that is similar or identical (reverse loop)
		$result[3] = ""; //  x of x lines, summary of findings from result[1] and [2]
		$result[4] = 0; // % of result[3]

		if ($harmonize)
		{
			$text = "<i>Identical</i>";
		}else{
			$text = "<i>Similar</i>";
		}

		if ( $c1_count == $c2_count )
		{
			$result[0] = "same number of lines. ".$c1_count." vs ".$c2_count;
		}else
		{
			$result[0] = " different number of lines. ".$c1_count." vs ".$c2_count;
		}
	
		
		foreach ($c1 as $k => $v)
		{	
			//forward compare
			if ($v == $c2[$k])
			{
				$result[1][$k] = "<b>line [".($k+1)."] ".$text." vs file \"".$vs."\" @ line [".($k+1)."]</b>";
				if (count($origcodes) == 2)
				{
					$result[1][$k] = $result[1][$k] . " <br> ";
					$result[1][$k] = $result[1][$k] . " Mainfile: <br> \"".$origcodes[0][$k]."\"";
					$result[1][$k] = $result[1][$k] . " <br> ";
					$result[1][$k] = $result[1][$k] . " ".$vs.": <br> \"".$origcodes[1][$k]."\"";
				}
			}
		
			// reverse compare
			if ($c1_count != $c2_count)
			{ 
				$end = $c1_count - $k -1;
				$end2 = $c2_count - $k -1;
				if ($end2 > 0)
				{
					if ($c1[$end] == $c2[$end2])
					{
						$result[2][$end] = "<b>line [".($end+1)."] ".$text." vs file \"".$vs."\" @ line [".($end2+1)."]</b>";
						if (count($origcodes) == 2)
						{
							$result[2][$end] = $result[2][$end] . " <br> ";
							$result[2][$end] = $result[2][$end] . " Mainfile: <br> \"".$origcodes[0][$end]."\"";
							$result[2][$end] = $result[2][$end] . " <br> ";
							$result[2][$end] = $result[2][$end] . " ".$vs.": <br> \"".$origcodes[1][$end2]."\"";
						}
					}
				}
			}

		}

		sort($result[2]);
		$c = count($result[1]) + count($result[2]);
		$result[3] = $c . " of " . $c1_count . " line(s), " . $text . " vs file \"".$vs."\".";
		$pct = round($c / $c1_count, 2)*100;
		$result[4] = $pct . "% of the code is ".$text;
		
		return $result;
	}

	private function harmonizeVariables($str)
	{
		// get all unique variable in string
		$arr_var = $this->getVariables($str);
		// afterfinding variables, replace them with generic varnames
		//$new = "\$pqj" . date('ym');
		$new = "\$var";
		foreach($arr_var as $key => $val)
		{	
			//$str = str_replace($val, ($new . $key), $str);
			$c = preg_replace("/\\$/","",$val); 
			$str = preg_replace("/\\$(".$c.")\b/", ($new . $key), $str);
		}

		return $str;
	}

	private function simpleHarmonizeVariables($str)
	{
		// get all unique variable in string
		$arr_var = $this->getVariables($str);
		// afterfinding variables, replace them with generic varnames
		$new = "\$var";
		foreach($arr_var as $key => $val)
		{
			$c = preg_replace("/\\$/","",$val); 
			$str = preg_replace("/\\$(".$c.")\b/", $new, $str);
		}
		
		return $str;
	}

	private function getVariables($str)
	{
		preg_match_all("/\\$[a-z_0-9_A-Z]+/", $str, $matches);
		$vars = array_unique($matches[0]);

		$new = array();
		$i = 0;
		foreach($vars as $k => $v)
		{
			$new[$i] = $v;
			$i++;
		}
		
		if (is_array($new))
		{
			return  $new;
		}else{
			return array();
		}
	}

	private function codeStrToArray($string)
	{
		
		$code = $this->splitLine(";", $string);
		if (is_array($code))
		{ 
			//todo: add check if "$code[<last idx>] = "}?php>
			unset($code[(count($code)-1)]);

			return $code;
		}else{
			return array();
		}
	}

	private function splitLine($d, $string)
	{
		$split = array();
		$key = 0;
		$line = "";

		$string = htmlspecialchars_decode($string);

		for($x=0; $x < strlen($string); $x++)
		{
			if ( $string[$x] == $d || $x == (strlen($string)-1) )
			{
				$split[$key] = htmlentities($line);
				$key++;
				$line = "";
			}else{
				$line = $line . $string[$x];
			}
		}

		return $split;
	}

	private function fileToCodeStr($filePath)
	{	
		$temp = __DIR__ ."/temp/file00.txt";
		$strCodeClean = php_strip_whitespace($filePath);
		$fp = fopen($temp, 'w');
		fwrite($fp, ''); // clean the file
		fwrite($fp, $strCodeClean);
		fclose($fp);
		$strCode = $this->phpToCodeStr($temp);

		return strtolower($strCode);
	}

	private function phpToCodeStr($file)
	{
		$lines = file($file);
		foreach ($lines as $k => $ln)
		{
			$lines[$k] = strtolower(htmlentities($ln));
		}

		if (is_array($lines) && $this->isPhp($lines) && (count($lines) > 1))
		{
			//return str_replace(' ', '', $lines[1]);
			return $lines[1];
		}else{
			return "";
		}
	}

	private function isPhp($code)
	{	
		 return trim($code[0]) == trim(htmlentities("<?php"));
	}

	public function pretty_dump($var)
	{
		echo "<pre>";
		var_dump($var);
		echo "</pre>";
		echo "<br> ========  end of pretty_dump ======== <br>";
	}
}

?>