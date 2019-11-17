<?php

echo " Write a PHP program to check whether a given number is an ugly number. <br />";
echo " Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5 <br />";
echo " <i> Note: 1 is typically treated as an ugly number. </i><br /><br />";
echo " Sample A: 12. Expected Output: True <br />";
echo " Sample B: 98. Expected Output: False <br />";
echo " Input 1: 45. Result: ??? <br />";
echo " Input 2: 482. Result: ??? <br /><br />";

function is_ugly($params){
  $h = $params;
     


if ($h == 0){
              return "$params is not an Ugly number";
}
       
  $vs = array(2, 3, 5);
  foreach ($vs as $index){
      while ($h % $index == 0){
          $h /= $index;
      }
  }         
       

  if ($h == 1) { return "$params is an Ugly number"; }
  else { return "$params is not an Ugly number";
  }

}    

print(is_ugly(12)."<br />");
print(is_ugly(98)."<br />");
print(is_ugly(45)."<br />");
print(is_ugly(482)."<br />");


?>