<?php

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

// my code starts here
echo " * * * * * * * RESULT * * * * * * * * ";

// function for reversed sum
function reverse_sum($test1, $test2)
{
    // call function twice. to process each variable
    return reverse_integer($test1) + reverse_integer($test2);
}


// do the reveral
function reverse_integer($vars)
{
  $new_value = 0;
  while ($vars > 0)
  {
       $new_value = $new_value * 10;
       $new_value = $new_value + $vars % 10;
        	
        	$vars = (int)($vars/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $new_value;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");

?>