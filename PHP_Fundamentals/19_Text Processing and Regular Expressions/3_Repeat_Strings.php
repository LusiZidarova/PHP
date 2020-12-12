<?php
$text = readline();
while($text !=''){
    $words = explode(' ',$text);
    foreach ($words as $word){
        $count = strlen($word);
        echo str_repeat($word,$count);
    }
    echo PHP_EOL;
    $text = readline();
}

/*
 3.Repeat Strings - Judge 100%
Write a Program That Reads an Array of Strings. Each String is Repeated N Times, Where N is the Length of the String. Print the Concatenated String.
Examples
Input	            Output
hi abc add	        hihiabcabcabcaddaddadd
work	            workworkworkwork
ball	            ballballballball
Solution
Read a string array.
hi abc add
work
ball
Iterate through elements in the array.

Find the length of the current word.
 */