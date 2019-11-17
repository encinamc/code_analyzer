<?php
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
        	
        	$swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");



echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");

echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");
echo " Write a PHP program to compute the sum of the two reversed numbers and display the sum in reversed form. <br />";
echo " <i> Note : The result will not be unique for every number for example 31 is a reversed form of several numbers of 13, 130, 1300 etc. Therefore all the leading zeros will be omitted </i>><br /><br />";
echo " Sample A: 13, 14. Expected Output: 72 <br />";
echo " Sample B: 120, 12. Expected Output: 42 <br />";  
echo " Input 1: 5796, 52. Result: ??? <br />";
echo " Input 2: 65, 92. Result: ??? <br /><br />";

//** pass the the variables to sum and swap
function reverse_sum($variable_1, $variable_2)
{
    $result1 = reverse_integer($variable_1);
    $result2 = reverse_integer($variable_2);
    return  $result1 + $result2;
}


// do the reveral
function reverse_integer($swap)
{
  $result = 0;
  while ($swap > 0)
  {
       $result = $result * 10;
       $result += $swap % 10;
          
          $swap = (int)($swap/10);
  }

  /** while loop is used to process each $var/10 loop
  return reuslt to calling function
  **/

return $result;
}  

// test the function here

print_r(reverse_sum(13, 14)."<br />");
print_r(reverse_sum(120, 12)."<br />");
print_r(reverse_sum(5796, 52)."<br />");
print_r(reverse_sum(65, 92)."<br />");




?>