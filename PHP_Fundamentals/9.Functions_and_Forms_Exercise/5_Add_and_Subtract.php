<?php
$first = intval(readline());
$two = intval(readline());
$three = intval(readline());

addSubstract($first,$two,$three);

function addSubstract($a,$b,$c){
    $sum = $a+$b;
    $sub = $sum -$c;
    echo $sub;
}

/*
5.Add and Subtract
 * You will receive 3 integers. Write a function sum to get the sum of the first two integers and subtract function that subtracts the third integer from the result from the Sum function. 
Examples
Input	Output
23
6
10	19
 *************
1
17
30	-12
 ******************
42 
58
100	0
 */