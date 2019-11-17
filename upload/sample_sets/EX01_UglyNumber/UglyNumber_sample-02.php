<?php

echo " Write a PHP program to check whether a given number is an ugly number. <br />";
echo " Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5 <br />";
echo " <i> Note: 1 is typically treated as an ugly number. </i><br /><br />";
echo " Sample A: 12. Expected Output: True <br />";
echo " Sample B: 98. Expected Output: False <br />";
echo " Input 1: 45. Result: ??? <br />";
echo " Input 2: 482. Result: ??? <br /><br />";

function checkUgly($number)
{
  $input = $number;
     
  if ($number == 0)
  {
    return $number." is not an Ugly number";
  }
       
  $array = array(2, 3, 5);
  foreach ($array as $i)
  {
    while ($number % $i == 0)
    {
      $number /= $i;
    }
  }         
       
  if ($number==1)
  {
    return $input." is an Ugly number";
  }
  else
  {
    return $input." is not an Ugly number";
  }

 }    

print(checkUgly(12)."<br />");
print(checkUgly(98)."<br />");
print(checkUgly(45)."<br />");
print(checkUgly(482)."<br />");


?>