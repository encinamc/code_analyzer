<?php

echo " Write a PHP program to check whether a given number is an ugly number. <br />";
echo " Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5 <br />";
echo " <i> Note: 1 is typically treated as an ugly number. </i><br /><br />";
echo " Sample A: 12. Expected Output: True <br />";
echo " Sample B: 98. Expected Output: False <br />";
echo " Input 1: 45. Result: ??? <br />";
echo " Input 2: 482. Result: ??? <br /><br />";
echo " ======================================== <br />";

function number_ugly_check($var)
{
    $num = $var;
    $orig = $var;
     if ($num == 0)
       {
            return "$num is not an Ugly number";
       }
       
       $x = array(2, 3, 5);
      foreach ($x as $z => $i)
      {
            while ($num % $i == 0)
            {
                $num /= $i;
                 }
         }         
       if ($num==1)
         {
              return "$orig is an Ugly number";
         }
         else
         {
              return "$orig is not an Ugly number";
         }

 }    

print(number_ugly_check(12)."<br />");
print(number_ugly_check(98)."<br />");
print(number_ugly_check(45)."<br />");
print(number_ugly_check(482)."<br />");


?>