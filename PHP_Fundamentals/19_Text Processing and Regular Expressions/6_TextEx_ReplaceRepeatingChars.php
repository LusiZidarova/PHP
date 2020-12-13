<?php
$input= readline();
$length = strlen($input);
$newString=[];
for ($i=0; $i<$length-1;$i++){
    if($input[$i] !== $input[$i+1]){
        $newString[] = $input[$i];
    }
}
echo implode('',$newString);
/*
6.Replace Repeating Chars - 100%
Write a program that reads a string from the console and replaces any sequence of the same letters with a single corresponding letter.
Examples
Input	Output
aaaaabbbbbcdddeeeedssaa


Output
abcdedsa

Input
qqqwerqwecccwd
Output
qwerqwecwd
 */