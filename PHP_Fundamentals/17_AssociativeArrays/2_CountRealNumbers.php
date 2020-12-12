<?php
$numbers = explode(' ',readline());
$numbersArray = [];
foreach ($numbers as $num){
    if (!key_exists($num,$numbersArray)) {
        $numbersArray[$num] = 1;
    } else {
        $numbersArray[$num]++;
    }
}
ksort($numbersArray);
foreach ($numbersArray as $key => $value) {
    echo $key . ' -> ' . $value . PHP_EOL;
}
/*
2. Count Real Numbers - Judge 100%
Read a list of real numbers and print them in ascending order along with their number of occurrences.
Examples
Input Output
8 2.5 2.5 8 2.5
Output
2.5 -->  3
8 ->  2
Input
1.5 5 1.5 3
Output
1.5 ->  2
3 ->  1
5 ->  1
Input
-2 0.33 0.33 2
Output
-2 ->  1
0.33 ->  2
2 ->  1

Hints
Read the input and convert it to array:
 */