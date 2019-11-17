<?php
// case 1 different comment and variable names
// case 2 identions
// case 6 extra line in end, additional variables

$arrcolor = array('brown','green','red','blue');

foreach($arrcolor as $key => $v)
{
echo " <br> :".$v;
echo " <br>";
}

// a little extra effort
$fave = $arrcolor[2];
echo "my fave is ".$fave;

?>
