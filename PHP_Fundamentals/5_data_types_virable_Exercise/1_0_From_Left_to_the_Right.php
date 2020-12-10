<?php
$n = readline();
for ($i = 0; $i < $n; $i++) {
    // $nums = explode(" ", preg_replace('/\s+/', ' ', trim(readline())));
    $nums = explode(' ', readline());
    $greaterNum = $nums[0] > $nums[1] ? $nums[0] : $nums[1];
    $sum = 0;
    for ($j = 0; $j < strlen($greaterNum); $j++) {
        $sum += intval($greaterNum[$j]);
    }
    echo $sum . PHP_EOL;
}

/*
 * More Exercises: Data Types and Variables
1_1.From Left to the Right
You will receive number which represent how many lines we will get as an input. On the next N lines, you will
receive a string with 2 numbers separated by single space. You need to compare them. If the left number is greater
than the right number, you need to print the sum of all digits in the left number, otherwise print the sum of all
digits in the right number.
Examples

Input Output

2
1000 2000
2000 1000

2
2

4
123456 2147483647
5000000 -500000
97766554 97766554
9999999999 8888888888
 output:
 *  46
5
49
90
 * 

 * 2.Reshenie
 * <?php

$n = readline();

for ($i = 0; $i < $n; $i++) {

    $m = readline();

    $num1 = '';

    $num2 = '';

    $sum1 = 0;

    $sum2 = 0;

    $isNum1 = true;

    for ($j = 0; $j < strlen($m); $j++) {

        if ($m[$j] == ' ') {

            $isNum1 = false;

            continue;

        }

        if ($isNum1) {

            $num1 .= $m[$j];

            $sum1 += intval($m[$j]);

        } else {

            $num2 .= $m[$j];

            $sum2 += intval($m[$j]);

        }

    }

    if ($num1 > $num2) {

        echo $sum1 . PHP_EOL;

    } else {

        echo $sum2 . PHP_EOL;

    }

}
 */

