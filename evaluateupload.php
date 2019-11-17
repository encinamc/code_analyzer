<?php

include __DIR__ . '/CodeCompare.php';
if (!isset($_SESSION)) {
	session_start();
	clear_duplicate_cookies();
}

// Clear all content of repo folder
array_map( 'unlink', array_filter((array) glob(__DIR__ ."/repo/*") ) );
unset($_SESSION['compareResult']);
unset($_SESSION['aliasPath']);

// Validation
$rs = validateFiles($_FILES, $_POST['alias']);
if ($rs['result'] === 'success') {
	echo "All files are valid. Proceeding with comparing files...";
	echo '<br />';

	$cc = new CodeCompare($rs['mainFile'], $rs['files']);
	$compareResult = $cc->init();
	$aliasPath = $cc->getFileData();

	$_SESSION['compareResult'] = $compareResult;
	$_SESSION['aliasPath'] = $aliasPath;

	header('Location: ' . $_SERVER['HTTP_REFERER']."#tbody");
	
} else {
	echo $rs['error'] ;
	echo '<br /><br /><a href="/code_analyzer">Go back to input page</a>';
}

function validateFiles($files, $alias) 
{
	$error = "";
	
	// Check main file is valid
	if (isValidFile($files['mainfile']['type'], $files['mainfile']['error'], $files['mainfile']['size'], $files['mainfile']['name'])) {
		// Check other files
		$otherFilesCount = count($files['otherfiles']['name']);

		if ($otherFilesCount === 0) {
			return [
				'result' => 'fail',
				'error' => "No uploaded files for comparisson"
			];
		}

		// TODO: skip if no upload
		$savedFiles = 1;
		$mapFiles =  array();
		$filteredAlias = "";
		for($x = 0; $x < $otherFilesCount; $x++) {
			// Skip empty ones
			if ($files['otherfiles']['size'][$x] === 0) {
				continue;
			}

			if (!isValidFile($files['otherfiles']['type'][$x], $files['otherfiles']['error'][$x], $files['otherfiles']['size'][$x], $files['otherfiles']['name'][$x])) {
				return [
					'result' => 'fail',
					'error' => "Invalid. Kindly check File #" . ($x + 1) . ". Terminating comparrisson"
				];
			}

			if (in_array($files['otherfiles']['name'][$x], $mapFiles[$filteredAlias])) {
				return [
					'result' => 'fail',
					'error' => "Invalid. Kindly check File #" . ($x + 1) . ". There is duplicate filename. Terminating comparrisson"
				];
			}
			
			saveFile($files['otherfiles']['tmp_name'][$x], $files['otherfiles']['name'][$x]);
			$filteredAlias = $alias[$x] !== ""? $alias[$x] : "File " . ($x + 1);
			$mapFiles[$filteredAlias] = __DIR__ ."/repo/" . $files['otherfiles']['name'][$x];
			$savedFiles++;
		}

		// Save Main File
		saveFile($files['mainfile']['tmp_name'], $files['mainfile']['name']);
		
	} else {
		return [
			'result' => 'fail',
			'error' => "Invalid main file"
		];
	}

	return [
		'result' => 'success',
		'mainFile' => __DIR__ ."/repo/" . $files['mainfile']['name'],
		'files' => $mapFiles,
	];
}

function saveFile($tmpName, $name){
		$uploads_dir = __DIR__ ."/repo";
		// If all is valid files, let's start moving!
		//$tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($name);
        move_uploaded_file($tmpName, "$uploads_dir/$name");
}

function isValidFile($type, $err, $size, $fname) {
	if ($size > 0 && $err === UPLOAD_ERR_OK && $type == "application/octet-stream" && strpos($fname, ".php") !== false) {
		return true;
	}

	return false;
}

function pretty_dump($var)
{
	echo "<pre>";
	var_dump($var);
	echo "</pre>";
	echo "<br> ========  end of pretty_dump ======== <br>";
}

function clear_duplicate_cookies() {
    // If headers have already been sent, there's nothing we can do
    if (headers_sent()) {
        return;
    }

    $cookies = array();
    foreach (headers_list() as $header) {
        // Identify cookie headers
        if (strpos($header, 'Set-Cookie:') === 0) {
            $cookies[] = $header;
        }
    }
    // Removes all cookie headers, including duplicates
    header_remove('Set-Cookie');

    // Restore one copy of each cookie
    foreach(array_unique($cookies) as $cookie) {
        header($cookie, false);
    }
}

?>