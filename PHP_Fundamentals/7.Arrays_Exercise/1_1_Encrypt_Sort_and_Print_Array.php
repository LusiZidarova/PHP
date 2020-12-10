<?php 
$n= readline();
$people = [];
for($i=0;$i<$n;$i++){
    $person = readline();
    $sum=0;
    $letter = 0;
    for($j=0; $j<strlen($person);$j++){
        if ($person[$j] == 'A' || $person[$j] == 'a' || $person[$j] == 'E' || $person[$j] == 'e'
            || $person[$j] == 'I' || $person[$j] == 'i' || $person[$j] == 'O' || $person[$j] == 'o'
            || $person[$j] == 'U' || $person[$j] == 'u')
        {
            $letter = ord($person[$j]) * strlen($person);
        }else{
            $letter = ord($person[$j]) / strlen($person);
        }
        $sum +=floor($letter);
    }
    $people[$person] =$sum;
}
$people = array_values($people);
sort($people);
echo implode(PHP_EOL,$people);

/*
1. Encrypt, Sort and Print Array
 * Write a program that reads a sequence of strings from the console. Encrypt every string by summing:
 The code of each vowel multiplied by the string length
 The code of each consonant divided by the string length
Sort the number sequence in ascending order and print it on the console.
On first line, you will always receive the number of strings you have to read.
 * Examples
Input  
4
Peter
Maria
Katya
Todor
 * 
Output
1032
1071
1168
1532
 * Comments
Peter = 1071
Maria = 1532
Katya = 1032
Todor = 1168
 * 
input
3
Sofia
London
Washington
 * Output
1396
1601
3202
 * Comments
Sofia = 1601
London = 1396
Washington = 3202
 * 
 */