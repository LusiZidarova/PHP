<?php
$input = readline();
$matrix = [];
$sumFirst=0;
$sumSecond=0;
for($row=0; $row<$input; $row++) {
    $matrix[] = explode(" ",readline());
}
for($i =0; $i<count($matrix);$i++){
    $sumFirst+=$matrix[$i][$i];
    $sumSecond+=$matrix[count($matrix)-1-$i][$i];
}
$diff = abs($sumFirst-$sumSecond);
echo $diff;

/*
 * 8.Diagonal Difference - 100/100 - -Web-Dev-Basics - Exercises Advanced Syntax and Operations - Lab

Advanced Syntax and Operations - Lab
Write a program that finds the difference between the sums of the square matrix diagonals (absolute value).

Input
⦁	The first line holds a number n – the size of matrix.
⦁	The next n lines hold the values for every row – n numbers separated by a space.
Examples
Input	Output	Comments
3
11 2 4
4 5 6
10 8 -12
Output
15
Comments
Primary diagonal: sum = 11 + 5 + (-12) = 4
Secondary diagonal: sum = 4 + 5 + 10 = 19
Difference: |4 - 19| = 15

 */