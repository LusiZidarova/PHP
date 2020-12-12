<?php
$text = readline();
$letters = [];
for($i=0; $i<strlen($text); $i++){
    if(!isset($letters[$text[$i]])){
        $letters[$text[$i]] = 1;
    }else{
        $letters[$text[$i]]++;
    }
}
foreach ($letters as $key=>$value){
    echo $key .' -> '. $value.PHP_EOL;
}

/*
 * 1. Counting Characters in Text - Judge 100%
Write a program that reads a text and counts the occurrences of each character in it. Print the results.
Examples
Input Output
aaabbaaabbbccc
output
a -> 6
b -> 5
c -> 3

Hints
First we read the text

Then we create array
Iterate over the text:

Check if the current char is set as key in the array (key_exists()), and if it is- add one to its value.
In other case- set the char as key, with initial value 1.

At the end print all key -&gt; values from the array.
 */