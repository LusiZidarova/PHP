<?php
$input = explode(' ',readline());
$inputArray = [];
foreach ($input as $key){
   $key =  strtolower($key);
    //echo $key.' ';
    if (!key_exists($key,$inputArray)) {
        $inputArray[$key] = 1;
    } else {
        $inputArray[$key]++;
    }
}
foreach ($inputArray as $key => $value){
    if ($value % 2 !== 0){
        echo $key. ' ';
    }
}
/*
3. Odd Occurrences - Judge 100%

© SoftUni – https://softuni.org. Copyrighted document. Unauthorized copy, reproduction or use is not permitted.
Follow us: Page 1 of 1
Write a program that extracts from a given sequence of words all elements that present in its odd number of times
(case-insensitive).
 Words are given in a single line, space separated.
 Print the result elements in lowercase, in their order of appearance.
Examples

Input

Output
java c# c
Input
3 5 5 hi pi HO Hi 5 ho 3 hi pi
Output
5 hi
Input
a a A SQL xx a xx a A a XX c
Output
a sql xx c
Hints
 Use an associative array to count the occurrences of each word (just like in the previous problem).
 Pass through all key-value pairs in the associative array and append to the results array all keys that have
odd value.
 Print the results list.

 */