<?php
$str = readline();

while ($str !== 'END' ) {
    if($str == strrev($str)){
       echo 'true'.PHP_EOL;
    } else {
        echo 'false'.PHP_EOL;
    }
    $str = readline();
}

/*
9.Palindrome Integers
 A palindrome is a number which reads the same backward as forward, such as 323 or 1001. Write a program which reads a positive integer numbers until you receive "End", for each number print whether the number is palindrome or not.
Examples
Input	Output		Input	Output
123     false
323     true
421     false
121     true
END
***************************
32      false
2       true
232     true
1010    false
END	false

 */