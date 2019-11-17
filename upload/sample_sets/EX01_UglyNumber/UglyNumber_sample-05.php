<?php

echo " Write a PHP program to check whether a given number is an ugly number. <br />";
echo " Ugly numbers are positive numbers whose only prime factors are 2, 3 or 5 <br />";
echo " <i> Note: 1 is typically treated as an ugly number. </i><br /><br />";
echo " Sample A: 12. Expected Output: True <br />";
echo " Sample B: 98. Expected Output: False <br />";
echo " Input 1: 45. Result: ??? <br />";
echo " Input 2: 482. Result: ??? <br /><br />";

function checkUgly($xz)
{
  $value = $xz;
     
if ($xz == 0)
{
  return "$xz is not an Ugly number";
}
       
$x = array(2, 3, 5);
foreach ($x as $a)
{
while ($xz % $a == 0)
{
$xz /= $a;
}
}         
if ($xz==1)
{
return "$value is an Ugly number";
}
else
{
return "$value is not an Ugly number";
}

}    

print(checkUgly(12)."<br />");
print(checkUgly(98)."<br />");
print(checkUgly(45)."<br />");
print(checkUgly(482)."<br />");


?>