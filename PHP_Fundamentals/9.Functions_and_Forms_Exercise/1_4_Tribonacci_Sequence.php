<?php
$n = intval(readline());

tribonacci($n);

function tribonacci($n){
  if($n>0){  
    $fib=[1,1];

    for ($i = count($fib); $i <$n; $i++) {

        $fib[$i] = $fib[$i-1]+$fib[$i-2]+$fib[$i-3];
    }
    echo implode(' ', $fib);
  }  
}
/*
4. Tribonacci Sequence
 * In the &quot;Tribonacci&quot; sequence, every number is formed by the sum of the previous 3.
You are given a number num. Write a program that prints num numbers from the Tribonacci sequence, each on a
new line, starting from 1. The value num will always be positive integer.
Examples
Input Output
4       1 1 2 4
8       1 1 2 4 7 13 24 44
2       1 1
 */