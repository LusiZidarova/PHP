<?php
$number = intval(readline());

printTopNumbers($number);

function printTopNumbers(int $number){
    for ($i = 1; $i <= $number; $i++) {
        $current = $i;
        $sumDigits = 0;
        $hasOdd = false;
        
        while($current > 0){
            $lastDigits = $current%10;
            $sumDigits+= $lastDigits;
            $current = intval($current/10);
            
            if($lastDigits%2==1){
                $hasOdd = true;
               
            }
        }
        if($sumDigits%8==0&&$hasOdd){
            echo $i.PHP_EOL;
        }
    }
}
/*
10.Top Number
A top number is an integer that holds the following properties:
Its sum of digits is divisible by 8, e.g. 8, 16, 88.
Holds at least one odd digit, e.g. 232, 707, 87578.
Write a program to print all master numbers in the range [1…n].
Examples
Input	Output		
50	17
 *      35
 ****************************
 * 
100	17
        35
        53
        71
        79
        97
 */