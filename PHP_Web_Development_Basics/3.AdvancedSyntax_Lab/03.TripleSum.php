<?php
$numArr = explode(" ",readline());

$isExist = false;

for($i=0; $i<count($numArr);$i++){
    for($j=$i+1; $j<count($numArr); $j++){
        for ($c=0; $c<count($numArr); $c++){
            if($numArr[$i] + $numArr[$j] == $numArr[$c] ){
                echo $numArr[$i]." + ".$numArr[$j]." == ".$numArr[$c].PHP_EOL;
                $isExist = true;
            }
        }

    }
}
if(!$isExist){
    echo "No";
}
/*
 * 03.Triple Sum - 100/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
Write a program to read an array of integers and find all triples of elements a, b and c, such that a + b == c
 (where a stays to the left from b). Print “No” if no such triples exist.
Examples
Input
1 1 1 1
Output
No
Input
4 2 8 6
Output
4 + 2 == 6
2 + 6 == 8
Input
2 7 5 0
Output
2 + 5 == 7
2 + 0 == 2
7 + 0 == 7
5 + 0 == 5
Input
3 1 5 6 1 2
Output
3 + 2 == 5
1 + 5 == 6
1 + 1 == 2
1 + 2 == 3
5 + 1 == 6
1 + 2 == 3
Hints:
⦁	Read the input numbers in array arr[].
⦁	Use nested loops to generate all pairs {a, b}, such that 0 ≤ a < b < n.
⦁	Check whether arr[] contains the sum arr[a] + arr[b]
 */