<?php
$words = explode(" ",strtolower(readline()));
$newArray= [];
foreach ($words as $word){
    if(!key_exists($word,$newArray)){
        $newArray[$word]=1;
    }else{
        $newArray[$word]++;
    }
}
$result=[];
foreach ($newArray as $key=>$value){
    if($value % 2 !=0){
        array_push($result,$key);
    }
}
echo implode(", ",$result);
/*
 * 10.Odd Occurrences -100/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
Write a program that extracts from a given sequence of words all elements that present in it odd number of times (case-insensitive).
⦁	Words are given in a single line, space separated.
⦁	Print the result elements in lowercase, in their order of appearance.
Examples
Input	Output
Java C# PHP PHP JAVA C java	    Output:  java, c#, c
3 5 5 hi pi HO Hi 5 ho 3 hi pi	Output:  5, hi
a a A SQL xx a xx a A a XX c	Output:  a, sql, xx, c
Hints
⦁	Use a associative array (string  int) to count the occurrences of each word (just like in the previous problem).
⦁	Pass through all key-value pairs in the dictionary and append to the results array all keys that have odd value.
⦁	Print the results list.

 */