<?php
$words = explode(", ", readline());
$newArray = [];
foreach ($words as $word) {
    if (!key_exists($word, $newArray)) {
        $newArray[$word] = 1;
    } else {
        $newArray[$word]++;
    }
}

foreach ($newArray as $key => $value) {
    if ($value == 1) {
        echo $key." ";
    }
}

/*
 * 13.Periodic Table - 100/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
You are given an n number of chemical elements. You need to keep track of all elements and at the end print all unique ones.
Examples
Input
Ce, O, Mo, O, Ce, Ee, Mo
Output
Ee
Input
Ge, Ch, O, Ne, Nb, Mo, Tc, O, Ne
Output
Ge Ch Nb Mo Tc
*/
