<?php
$s = readline();
middleCharacters($s);

function middleCharacters($s){
    $strlength = strlen($s);
        if($strlength%2 !== 0){
            $middle = (int)($strlength/2);
            echo $s[$middle];
        } else {
            $middle = (int)($strlength/2);
            echo $s[$middle-1].$s[$middle];
        }
}

/*
6.Middle Characters
 You will receive a single string. Write a function that prints the middle character. If the length of the string is even there are two middle characters.
Examples
Input	     Output
aString	     r
 ****************
someText     eT
 ********************
3245	     24
 */