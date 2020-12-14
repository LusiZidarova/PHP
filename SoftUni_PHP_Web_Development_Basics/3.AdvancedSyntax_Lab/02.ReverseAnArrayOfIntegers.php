<?php
$n = intval(readline());
$arr = [];

for($i = 0; $i< $n; $i++){
    $arr[] = intval(readline());
}

echo implode(" ",array_reverse($arr));

/*
 * 02.Reverse an Array of Integers - 100/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
Write a program to read an array of integers, reverse it and print its elements. The input consists of a number n (the number of elements) + n integers, each as a separate line. Print the output on a single line (space separated).
Examples
Input
3
10
20
30

Output: 30 20 10

Input
4
-1
20
99
5
Output:5 99 20 -1
Hints
⦁	First, read the number n.
⦁	Allocate an array of n integers.
⦁	Read the integers in a for-loop.
⦁	Instead of reversing the array, you can just pass through the elements from the last (n-1) to the first (0) with a reverse for-loop.
*/
