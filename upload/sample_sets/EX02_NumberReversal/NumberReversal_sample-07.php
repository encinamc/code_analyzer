<?php
// display the instructions
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";
// end of instructions

// my solution for this exercise. 2019/06/23
function reverse_sum($n1, $n2){    	return reverse_integer($n1) + reverse_integer($n2);}

function reverse_integer($n){
    $reverse = 0;
    
/* after init, while loop to get correct reverse.

	process it below.
*/



    while ($n > 0)
    {
    $reverse = $reverse * 10;
    $reverse = $reverse + $n % 10;
    $n = (int)($n/10);
    }
    
return $reverse;
}  


// the results are printed

print_r(reverse_sum(13, 14)."<br />"); print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");print_r(reverse_sum(65, 92)."<br />");

?>