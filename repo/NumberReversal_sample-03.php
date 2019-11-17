<?php

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";


// simple reverse sum function
function reverse_sum($a, $b)
{
return reverse_integer($a) + reverse_integer($b);
}

/** 
this is the reverse intereger function
**/

function reverse_integer($c)
{
	$val = 0;
	while ($c > 0){
	$val = $val * 10;
	$val = $val + $c % 10;
	$c = (int)($c/10);
}

return $val;
}  

echo "========================== result == <br />";
print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");

?>