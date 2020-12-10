<?php
$snowball = intval(readline());
$snowballSnow = 0;
$snowballTime = 0;
$snowballQuality = 0;

$count = 0;
$maxValue = 0;


while($count < $snowball){
    
   $snowballSnow = intval(readline());
   $snowballTime = intval(readline());
   $snowballQuality = intval(readline()); 
   
   $snowballValue  = bcpow(($snowballSnow / $snowballTime), $snowballQuality);
   if ( $snowballValue > $maxValue){
       
       $maxValue = $snowballValue;
       $endSnowballSnow = $snowballSnow;
       $endSnowballTime = $snowballTime;
       $endSnowballQuality = $snowballQuality;
       
      echo "$endSnowballSnow : $endSnowballTime = $snowballValue ($endSnowballQuality)";
   }
   
   $count++;
}



/*
8. *Snowballs
Tony and Andi love playing in the snow and having snowball fights, but they always argue which makes the best
snowballs. Because they are girls (which means they are completely illogical), they have decided to involve you in
their fray, by making you write a program which calculates snowball data, and outputs the best snowball value.
You will receive N – an integer, the number of snowballs being made by Tony and Andi.
For each snowball you will receive 3 input lines:
 On the first line you will get the snowballSnow – an integer.
 On the second line you will get the snowballTime – an integer.
 On the third line you will get the snowballQuality – an integer.
For each snowball you must calculate its snowballValue by the following formula:
(snowballSnow / snowballTime) ^ snowballQuality

At the end you must print the highest calculated snowballValue.
Input
 On the first input line you will receive N – the number of snowballs.
 On the next N * 3 input lines you will be receiving data about snowballs.
Output
 As output you must print the highest calculated snowballValue, by the formula, specified above.
 The output format is:
{snowballSnow} : {snowballTime} = {snowballValue} ({snowballQuality})
Constraints
 The number of snowballs (N) will be an integer in range [0, 100].
 The snowballSnow is an integer in range [0, 1000].
 The snowballTime is an integer in range [1, 500].
 The snowballQuality is an integer in range [0, 100].
 Allowed working time / memory: 100ms / 16MB.
Examples
Input 
2
10
2
3
5
5
5
Output: 10 : 2 = 125 (3)
Input:
3
10
5
7
16
4
2
20
2
2
Output: 10 : 5 = 128 (7)
 * 
 * Hint
For arbitrary precision mathematics PHP offers the Binary Calculator( bc_math functions ) which supports numbers
of any size and precision, represented as strings.
 */


//if($snowball <0 && $snowball >100){
//    echo 'Въведеното число трябва да е в интервала между 0 и 100.';
//
//    if($snowballSnow <0 && $snowballSnow >1000){
//        echo 'Въведеното число трябва да е в интервала между 0 и 1000.';
//    }
//    if($snowballTime <1 && $snowballTime >500){
//        echo 'Въведеното число трябва да е в интервала между 1 и 500.';
//    }
//    if($snowballQuality <0 && $snowballQuality >100){
//        echo 'Въведеното число трябва да е в интервала между 0 и 100.';
//    }
//} else {
//    
//}