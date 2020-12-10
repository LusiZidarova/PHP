<?php 
$arr1 = explode(' ',readline());
$arr2 = explode(' ',readline());

foreach ($arr2 as $value) {
    if(in_array($value, $arr1)){
        echo $value.' ';
    }
}

/*
 * 2. Common Elements
 * Write a program, which prints common elements in two arrays. You have to compare the elements of the second
array to the elements of the first.
Examples
Input 
Hey hello 2 4
10 hey 4 hello 
 * Output 
 * 4 hello
 * input
S of t un i
of i 10 un 
 * output
 * of i un
input
i love to code
code i love to 
 * Outputcode 
 * i love to
 */