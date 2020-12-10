<?php 
$n= intval(readline());

//$n =2;

$array = [];
$sum = 0;
for($i=0;$i<$n;$i++){
    $people = intval(readline());
    $array[$i] = $people;
    $sum+= $people;
}
$train = implode(' ', $array);
echo $train.PHP_EOL;
echo $sum;
/*
1. Train
 * You will be given a count of wagons in a train n. On the next n lines you will receive how many people are going to
get on that wagon. At the end print the whole train and after that the sum of the people in the train.
 * Examples
Input 
3
13
24
8
Output
13 24 8
45
 * 
Input
6
3
52
71
13
65
4
Output
3 52 71 13 65 4
208
 * 
Input
1
100
Output
100
100
 * 
 */