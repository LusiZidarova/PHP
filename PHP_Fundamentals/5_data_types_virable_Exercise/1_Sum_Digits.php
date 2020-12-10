<?php
$digits = readline();
$lenght = strlen($digits);
$sum = 0;

 for($i = 0; $i < $lenght; $i++){
    $sum += $digits[$i];
}
echo $sum;

/*
1. Sum Digits
You will be given a single integer. Your task is to find the sum of its digits.
Examples
Input Output
245678 32
97561 28
543 12
 */
