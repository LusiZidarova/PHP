<?php
$num1 = intval(readline());
$num2 = intval(readline());
$num3 = intval(readline());
$num4 = intval(readline());

$div = (int)(($num1+$num2)/$num3);

$multiply = $div * $num4;

echo $multiply;
/*
1. Integer Operations
Read four integer numbers. Add first to the second, divide (integer) the sum by the third number and multiply the
result by the fourth number. Print the result.
Constraints
? First number will be in the range [-2,147,483,648� 2,147,483,647]
? Second number will be in the range [-2,147,483,648� 2,147,483,647]
? Third number will be in the range [-2,147,483,648� 2,147,483,647]
? Fourth number will be in the range [-2,147,483,648� 2,147,483,647]
Examples
Input   
10
20
3
3
 * Output 30 
 * 
Input 15
14
2
3
Output 42
 */
