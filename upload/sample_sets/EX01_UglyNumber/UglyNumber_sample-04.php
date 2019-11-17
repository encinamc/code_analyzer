<?php

echo " Write a PHP program to check whether a given number is an ugly number. <br />";
echo " Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5 <br />";
echo " <i> Note: 1 is typically treated as an ugly number. </i><br /><br />";
echo " Sample A: 12. Expected Output: True <br />";
echo " Sample B: 98. Expected Output: False <br />";
echo " Input 1: 45. Result: ??? <br />";
echo " Input 2: 482. Result: ??? <br /><br />";

function checker($var)
{
    $orig = $var;
     if ($var == 0)
       {
            return "$var is not an Ugly number";
       }
       
       $x = array(2, 3, 5);
      foreach ($x as $z => $i)
      {
            while ($var % $i == 0)
            {
                $var /= $i;
                 }
         }         
       if ($var==1)
         {
              return "$orig is an Ugly number";
         }
         else
         {
              return "$orig is not an Ugly number";
         }

 }    

 $val1 = 12;
 $val2 = 98;
 $val3 = 45;
 $val4 = 482;

print(checker($val1)."<br />");
print(checker($val2)."<br />");
print(checker($val3)."<br />");
print(checker($val4)."<br />");


?>