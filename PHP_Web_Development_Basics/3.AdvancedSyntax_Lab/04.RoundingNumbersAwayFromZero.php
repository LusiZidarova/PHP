<?php
$nums = explode(" ",readline());

foreach ($nums as $num){
    echo $num." => ".round($num,0,PHP_ROUND_HALF_UP).PHP_EOL;
}
/*
 * 04.Rounding Numbers Away from Zero - 100/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
Write a program to read an array of real numbers (space separated values), round them to the nearest integer in “away from 0” style and print the output as in the examples below.
Rounding in “away from zero” style means:
⦁	To round to the nearest integer, e.g. 2.9  3; -1.75  -2
⦁	In case the number is exactly in the middle of two integers (midpoint value), round it to the next integer which is away from the 0:

Examples
Input	Output
0.9 1.5 2.4 2.5 3.14
Output
0.9 => 1
1.5 => 2
2.4 => 2
2.5 => 3
3.14 => 3

Input: -5.01 -1.599 -2.5 -1.50 0

Output
-5.01 => -5
-1.599 => -2
-2.5 => -3
-1.50 => -2
0 => 0
Hints:
⦁	Approach I: Take the absolute value of each input number, add 0.5 and truncate the integral part. If the original number is negative, make the result also negative.
⦁	Approach II: Search in Internet for “rounding away from zero” + PHP. In this case it’s “PHP_ROUND_HALF_UP”.  You should find a built-in ⦁	PHP⦁	 method for rounding in many styles. Choose the “away from zero” rounding.
⦁	For example echo round(9.5 , 0 ,PHP_ROUND_HALF_UP) Will print 10.
Here first parameter in this case 9.5 is the number we want to round.
Second parameter in this case 0 is the precision we want (0 means 0 digits after decimal point).
Third parameter in this case PHP_ROUND_HALF_UP is the method we want to use for rounding.



 */