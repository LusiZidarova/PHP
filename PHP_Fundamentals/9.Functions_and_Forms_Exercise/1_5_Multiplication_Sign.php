<?php
$n1= readline();
$n2= readline();
$n3= readline();

if($n1 == 0 || $n2 == 0 || $n3 == 0){
    echo 'zero';  
} else {
    $counter = 0;
    $counter += $n1 < 0 ? 1 : 0;
    $counter += $n2 < 0 ? 1 : 0;
    $counter += $n3 < 0 ? 1 : 0;
    echo $counter % 2 == 0 ? "positive" : "negative";
}


/*
5. Multiplication Sign
 You are given a number num1, num2 and num3. Write a program that finds if num1 * num2 * num3 (the product)
is negative, positive or zero. Try to do this WITHOUT multiplying the 3 numbers.
Examples
Input 
2
3
-1

Output
negative

Input
2
3
1
Output
positive

Input
-2
0
4
Output
zero
 */