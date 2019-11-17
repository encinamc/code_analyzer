<?php
// Original Code
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

function reverse_sum($the_numberew1, $the_numberew2)
{
    return reverse_integer($the_numberew1) + reverse_integer($the_numberew2);
}

function reverse_integer($the_number)
{
    $r1 = 0;
    while ($the_number > 0)
      {
        $r1 = $r1 * 10;
        $r1 = $r1 + $the_number % 10;
        $the_number = (int)($the_number/10);
      }
     return $r1;
}  

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");

?>