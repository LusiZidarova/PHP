<?php
$first = ord(readline());
$last =ord(readline());
$input = str_split(readline());
$count = 0;
$current = $first;
if($first>$last){
    $first = $last;
    $last = $current;
}
foreach($input as $char){
    if(ord($char) > $first && ord($char) < $last){
        $count += ord($char);
    }
}
echo $count;
/*
 4.Ascii Sumator - 100%
Write a program that prints a sum of all characters between two given characters (their ascii code). On the first line you will get a character. On the second line you get another character. On the last line you get a random string. Find all the characters between the two given and print their ascii sum.
Example
Input
.
@
dsg12gr5653feee5

Output
363

Input
?
E
@ABCEF

Output
262
Input

a
1
jfe392$#@j24ui9ne#@$

Output
445
 */