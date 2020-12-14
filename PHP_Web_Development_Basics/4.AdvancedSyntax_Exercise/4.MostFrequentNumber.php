<?php
$input = explode(" ",readline());
$newArray = [];
for($i=0; $i<count($input); $i++){
    if(!key_exists($input[$i],$newArray)){
        $newArray[$input[$i]]=1;
    }else{
        $newArray[$input[$i]]++;
    }
}
echo array_search(max($newArray),$newArray);


/*4. Most Frequent Number -100/100 PHP-Web-Dev-Basics-Exercises Advanced Syntax and Operations - Exercise
Write a program that finds the most frequent number in a given sequence of numbers.
⦁	Numbers will be in the range [0…65535].
⦁	In case of multiple numbers with the same maximal frequency, print the left most of them.
Examples
Input	                    Output	Output
4 1 1 4 2 3 4 4 1 2 4 9 3	4	    The number 4 is the most frequent (occurs 5 times)
2 2 2 2 1 2 2 2	            2	    The number 2 is the most frequent (occurs 7 times)
7 7 7 0 2 2 2 0 10 10 10	7	    The numbers 2, 7 and 10 have the same maximal frequence (each occurs 3 times). The leftmost of them is 7.
*/