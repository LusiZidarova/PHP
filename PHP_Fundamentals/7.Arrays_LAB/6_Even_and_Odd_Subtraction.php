<?php
$num = explode(' ',readline());
$sumEven =0;
$sumOdd = 0;

for($i=0;$i<count($num)-1;$i++){
    if ($num[$i]%2==0){
        $sumEven+=$num[$i];
    }
    if($num[$i]%2!==0){
        $sumOdd+=$num[$i];
    }
}
$result = $sumEven - $sumOdd;
echo $result;  


/*
6. Even and Odd Subtraction
 * Write a program that calculates the difference between the sum of the even and the sum of the odd numbers in an
array.
Examples
Input Output 
1 2 3 4 5 6 
Output: 3
Comments:
2 + 4 + 6 = 12
1+3+5 =9
 * 12-9=3
 * 
 */