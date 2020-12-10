<?php
$chars = explode(' ',readline());

for($i=count($chars)-1;$i>=0;$i--){
     echo $chars[$i].' ';
}

/*
 4. Reverse an Array of Strings
 * Write a program to read an array of strings, reverse it and print its elements. The input consists of a sequence of
space separated strings. Print the output on a single line (space separated).
 *
 * Examples
Input        Output
a b c d e    e d c b a
-1 hi ho w   w ho hi -1
 * 
 */