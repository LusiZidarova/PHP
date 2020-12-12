<?php
$word = readline();
$text = readline();

while(true){
    $old=$text;
    $text= str_replace($word,'',$text);
    if($old == $text){
        echo $text;
    break;
    }
}

/*
 1.Substring - - Judge - 100%
On the first line you will receive a string. On the second line you will receive a second string. Write a program that removes all of the occurrences of the first string in the second until there is no match. At the end print the remaining string.
Examples
Input
ice
kicegiciceeb

Output
kgb

Comment
We remove ice once and we get "kgiciceeb"
We match "ice" one more time and we get "kgiceb"
There is one more match. The final result is "kgb"
 */