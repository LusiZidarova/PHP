<?php
$n = intval(readline());

printSigh($n);
   
function printSigh($n){
    if($n<0){
        echo 'The number '.$n.' is negative.';
    }elseif($n==0){
        echo 'The number '.$n.' is zero.';
    } else {
        echo 'The number '.$n.' is positive.';
    }
}

/*
1. Sign of Integer
Create a function that prints the sign of an integer number:
Example
Input Output
2 The number 2 is positive.
-5 The number -5 is negative.
0 The number 0 is zero.
*/