<?php

echo " Write a PHP program to check whether a given number is an ugly number. <br />";
echo " Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5 <br />";
echo " <i> Note: 1 is typically treated as an ugly number. </i><br /><br />";
echo " Sample A: 12. Expected Output: True <br />";
echo " Sample B: 98. Expected Output: False <br />";
echo " Input 1: 45. Result: ??? <br />";
echo " Input 2: 482. Result: ??? <br /><br />";

function processNumber($num)
  {
     $j = $num;
     if ($j == 0)
       {
            return "$num is not an Ugly number";
       }
       
       $x = array(2, 3, 5);
      foreach ($x as $i)
      {
            while ($j % $i == 0)
            {
                $j /= $i;
                 }
         }         
       if ($j ==1)
         {
              return "$num is an Ugly number";
         }
         else
         {
              return "$num is not an Ugly number";
         }

 }    

print(processNumber(12)."<br />");
print(processNumber(98)."<br />");
print(processNumber(45)."<br />");
print(processNumber(482)."<br />");


?>