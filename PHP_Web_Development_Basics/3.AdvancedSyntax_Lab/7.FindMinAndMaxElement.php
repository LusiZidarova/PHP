<?php
list($row,$col) = explode(", ",readline());
$matrix = [];
$max = PHP_INT_MIN;
$min = PHP_INT_MAX;
for($r=0; $r<$row; $r++){
        $matrix[$r]= explode(", ",readline());
        if($min > min($matrix[$r])){
            $min = min($matrix[$r]);
        }
        if($max < max($matrix[$r])){
            $max = max($matrix[$r]);
        }
}
echo "Min: ".$min.PHP_EOL;
echo "Max: ".$max;
/*
 * 7.Find Min and Max Element - 60/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
Write program that read a matrix from console and print min and max element:
Examples
Input	Output
3, 6
7, 1, 3, 3, 2, 1
1, 3, 9, 8, 5, 6
4, 6, 7, 9, 1, 1
Output:
Min: 1
Max: 9
*/
