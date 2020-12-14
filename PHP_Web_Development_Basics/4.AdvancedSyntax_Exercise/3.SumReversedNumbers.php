<?php
$input = explode(" ",readline());
$sum =0;

foreach ($input as $value){
    $sum += strrev($value);
}
echo $sum;
/*
 * 3. Sum Reversed Numbers -100/100 PHP-Web-Dev-Basics-Exercises Advanced Syntax and Operations - Exercise
To “rotate an array on the right” means to move its last element first: {1, 2, 3}  {3, 1, 2}.
Write a program to read an array of n integers (space separated on a single line) and sum the obtained arrays after each rotation as shown below.
Examples
Input	            Output	    Comments
123 234 12	        774	3       21 + 432 + 21 = 774
12 12 34 84 66 12	220	        21 + 21 + 43+ 48 + 66 + 21 = 220
12 12 12	        63	        21 + 21 + 21 = 63

 */