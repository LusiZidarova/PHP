<?php
$n = intval(readline());
$k = intval(readline());
$newArray=[];
$newArray[0] = 1;

for($i=1; $i<$n; $i++){
    $sum=0;
    for($prev = $i-$k; $prev<=$i-1; $prev++){
        if($prev>=0){
            $sum+=$newArray[$prev];
        }
    }
    $newArray[$i]= $sum;
}
echo implode(" ",$newArray);

/*
 * 7. Last K Numbers Sums Sequence 100/100 PHP-Web-Dev-Basics-Exercises Advanced Syntax and Operations - Exercise
Enter two integers n and k. Generate and print the following sequence of n elements:
⦁	The first element is: 1
⦁	All other elements = sum of the previous k elements (if less than k are available, sum all of them)
⦁	Example: n = 9, k = 5  120 = 4 + 8 + 16 + 31 + 61
Examples
Input	   Output
6
3	       1 1 2 4 7 13
------------------------------------
8
2	       1 1 2 3 5 8 13 21
-----------------------------------
9
5	        1 1 2 4 8 16 31 61 120
------------------------------------
Hints
⦁	Use an array of integers to hold the sequence.
⦁	Initially seq[0] = 1
⦁	Use two nested loops:
⦁	Loop through all elements i = 1 … n
⦁	Sum the elements i-k … i-1: seq[i] = sum(seq[i-k … i-1])

 */