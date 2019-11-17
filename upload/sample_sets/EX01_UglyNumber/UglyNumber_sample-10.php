<?php

// instructions
echo " Write a PHP program to check whether a given number is an ugly number. <br />";

echo " Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5 <br />";

echo " <i> Note: 1 is typically treated as an ugly number. </i><br /><br />";

echo " Sample A: 12. Expected Output: True <br />";

echo " Sample B: 98. Expected Output: False <br />";

echo " Input 1: 45. Result: ??? <br />";

echo " Input 2: 482. Result: ??? <br /><br />";

// my answer

function is_ugly($parameter){
$a = $parameter;
     
if ($parameter == 0){
    return "$parameter is not an Ugly number";
}       
$b = array(2, 3, 5);

foreach ($b as $int){
  while ($parameter % $int == 0){
    $parameter /= $int;
  }
}         
       
if ($parameter==1){
 return "$a is an Ugly number";
}
else{
  return "$a is not an Ugly number";
}

}    

print(is_ugly(12)."<br />");
print(is_ugly(98)."<br />");
print(is_ugly(45)."<br />");
print(is_ugly(482)."<br />");

?>