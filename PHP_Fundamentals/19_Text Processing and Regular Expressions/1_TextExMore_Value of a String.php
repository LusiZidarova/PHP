<?php
$string = readline();
$finds = readline();
$count = 0;

for ($i=0; $i<strlen($string); $i++){
    if($finds == 'UPPERCASE' ){
        if(ord($string[$i]) > 64 && ord($string[$i])< 91 ){

            $count += ord($string[$i]);
        }
    }
    if($finds == 'LOWERCASE') {
        if(ord($string[$i]) > 96 && ord($string[$i])< 123 ){
            $count += ord($string[$i]);
        }
    }
}
echo 'The total sum is: '.$count;
/*
 * 1.Value of a String - 100%
Write a program which finds the sum of the ASCII codes of the letters in a given string.  Your tasks will be a bit harder, because you will have to find the sum of either the lowercase or the uppercase letters.
On the first line, you will receive the string.
On the second line, you will receive one of two possible inputs:
If you receive “UPPERCASE”  find the sum of all uppercase English letters in the previously received string
 If you receive “LOWERCASE”  find the sum of all lowercase English letters in the previously received string
You should not sum the ASCII codes of any characters, which is not letters.
At the end print the sum in the following format:
The total sum is: {sum}
Examples
Input	Output
HelloFromMyAwesomePROGRAM
LOWERCASE

Output
The total sum is: 1539

Input
AC/DC
UPPERCASE

Output
The total sum is: 267
 */