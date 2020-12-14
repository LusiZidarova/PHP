<?php
$numbers = explode(" ",readline());
$newArray= [];
foreach ($numbers as $number){
    if(!key_exists($number,$newArray)){
        $newArray[$number]=1;
    }else{
        $newArray[$number]++;
    }
}
ksort($newArray);
foreach ($newArray as $key=>$value){
    echo $key." -> ".$value.PHP_EOL;
}
/*
 * 9.Count Real Numbers 100/100 -Web-Dev-Basics - Exercises Advanced Syntax and Operations - Lab
Read a list of real numbers and print them in ascending order along with their number of occurrences.
Examples
Input	Output		Input	Output		Input	Output
8 2.5 2.5 8 2.5
Output
2.5 -> 3
8 -> 2
Input
1.5 5 1.5 3
Output
1.5 -> 2
3 -> 1
5 -> 1
Input
-2 0.33 0.33 2
Output
-2 -> 1
0.33 -> 2
2 -> 1
Hints
⦁	Use sort array in ascending order.
⦁	Pass through each input number num and increase counts[num] (when num exists in the dictionary) or assign counts[num] = 1
(when num does not exist in the dictionary).

 */