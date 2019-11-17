<?php

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

function reverse_sum($var1, $var2)
{
    $result = reverse_integer($var1) + reverse_integer($var2);
    return $result;
}

function reverse_integer($var1)
{
    $reverse = 0;
    while ($var1 > 0)
      {
        $reverse = $reverse * 10;
        $reverse = $reverse + $var1 % 10;
        $var1 = (int)($var1/10);
      }
     return $reverse;
}  

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");

?>