<?php
$input  = readline();
$pattern = '/(^\#([A-Za-z]+)\#|^\$([A-Za-z]+)\$|^\%([A-Za-z]+)\%|^\*([A-Za-z]+)\*|^\&([A-Za-z]+)\&)=([0-9]+)!!(.*)$/';

//$pattern = '/(^\#([A-Za-z]+)\#|^\$([A-Za-z]+)\$|^\%([A-Za-z]+)\%|^\*([A-Za-z]+)\*|^\&([A-Za-z]+)\&)=([0-9]+)!!([A-Za-z0-9\!\"\#\$\%\&\\\'\(\)\*\+\,\-\.\/\:\;\<\>\ =\?\@\[\]\{\}\\\\^\_\`\~]+)$/';

while($input){
    if(preg_match($pattern,$input,$matches)){
         $matches = array_values(array_filter($matches));
        // print_r($matches);
         $name = $matches[2];
         $length = $matches[3];
         $encrypted = $matches[4];
         if($length == strlen($encrypted)){
             for ($i=0; $i<strlen($encrypted); $i++){
             $newEncrypted .= chr(ord($encrypted[$i]) +$length);
             }
             echo 'Coordinates found! '.$name.' -> '.$newEncrypted.PHP_EOL;
         }else{
             echo 'Nothing found!'.PHP_EOL;
         }
    }else{
        echo 'Nothing found!'.PHP_EOL;
    }
    $input = readline();
}

/*
Problem 3. The Isle of Man TT R- Programming Fundamentals Final Exam Preparation - 24 July 2019 - 100%
ace
This year’s Isle of Man TT Race is going to be around Douglas  and your job is to find the exact coordinates for it and the names of the racers. Every racer starts from a different place. You’re going to receive the coordinates in the form of a geohash code.

Write a program that decrypts messages. You’re going to receive a few notes that contain the following information:
•Name of racer
oConsists only of letters. It is surrounded from the both sides by any of the following symbols – "#, $, %, *, &". Both symbols – in the beginning and at the end of the name should match.
•Length of geohashcode
oBegins after the "=" sign and it is consisted only of numbers.
•Encrypted geohash code
oBegins after these symbols - “!!”. It may contain anything and the message always ends with it.
Examples for valid input:
#SteveHislop#=16!!tv5dekdz8x11ddkc
Examples of invalid input:
%GiacomoAgostini$=7!!tv58ycb – The length is the same, but the name is not surrounded by matching signs.
$GeoffDuke$=6!!tuvz26n35dhe4w4 – The length doesn't match the lengh of the code.
&JoeyDunlop&!!tvndjef67t=14 – The length should be before the code.
The information must be in the given order, otherwise it is considered invalid. The geohash code you are looking for is with length exactly as much as the given length in the message. To decrypt the code you need to increase the value of each symbol from the geohashcode with the given length. If you find a match, you have to print the following message:
"Coordinates found! {nameOfRacer} -> {geohashcode}"
and stop the program. Otherwise, after every invalid message print:
"Nothing found!"
Input / Constraints
You will be receiving strings.
There will always be a valid message.
Output
If you find the right coordinates, print: "Coordinates found! {nameOfRacer} -> {geohashcode}".
Otherwise, print: "Nothing found!".
Examples
Input	Output
%GiacomoAgostini%=7!!hbqw
&GeoffDuke*=6!!vjh]zi
JoeyDunlop=10!!lkd,rwazdr
Mike??Hailwood=5!![pliu
#SteveHislop#=16!!df%TU[Tj(h!!TT[S

Output
Nothing found!
Nothing found!
Nothing found!
Nothing found!
Coordinates found! SteveHislop -> tv5dekdz8x11ddkc
Comments
The first line matches, but the length of the code doesn't match the given number, so we print "Nothing found!"
The second line begins with "&", but ends with "*", so we print "Nothing found!"
The third line is not valid because the name is not surrounded with one of the allowed symbols.
The forth line is not a match, because the name doesn't contain only letters.
The fifth line is a match and the length is equal to the given number - 16, so we increase each of the symbols from the code with 16 and print the message in the appropriate format.


Ian6Hutchinson=7!!\(58ycb4
#MikeHailwood#!!'gfzxgu6768=11
slop%16!!plkdek/.8x11ddkc
$Steve$=9Hhffjh
*DavMolyneux*=15!!efgk#'_$&UYV%h%
RichardQ^uayle=16!!fr5de5kd

Output
Nothing found!
Nothing found!
Nothing found!
Coordinates found! DaveMolyneux -> tuvz26n35dhe4w4

*/