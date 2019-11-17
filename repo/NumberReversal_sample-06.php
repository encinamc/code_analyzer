<?php

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";



function reverseInteger($int){

    $newInt = 0;

    while ($int > 0){

    $newInt = $newInt * 10;

    $newInt = $newInt + $int % 10;
        
    $int = (int)($int/10);
    }
     



return $newInt;
}
  
function reverseSum($int1, $int2){

return reverseInteger($int1) + reverseInteger($int2);
}

print_r(reverseSum(13, 14)."<br />");
print_r(reverseSum(120, 12)."<br />");
print_r(reverseSum(5796, 52)."<br />");
print_r(reverseSum(65, 92)."<br />");

?>