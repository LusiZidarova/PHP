<?php
$arr = array_map(function($el){
    $el = strrev($el);
    return $el;
},explode(' ', readline()));

$sum=0;

foreach ($arr as  $value) {
    $sum+=$value;
}
echo $sum;
/*
7.Sum Reversed Numbers 100%

Write a program that reads sequence of numbers, reverses their digits, and prints their sum.
Examples
Input	                  Output	Comments
123 234 12	           774	         321 + 432 + 21 = 774
12 12 34 84 66 12	   220	         21 + 21 + 43+ 48 + 66 + 21 = 220
120 1200 12000	           63	         21 + 21 + 21 = 63

 */

