<?php
$input = readline();
$pattern = '/(^[a-zA-Z\d \!\@\#\$\?]+)=(\d+)<<(.*)$/';

while($input !=='Last note'){
    if(preg_match($pattern,$input,$matches)){

        if($matches[2] == strlen($matches[3])){
            $name = preg_replace('/[\!\@\#\$\?]+/','',$matches[1]);
            //Coordinates found! Annapurna -> tv5dekdz8x11ddkc
            echo 'Coordinates found! '.$name.' -> '.$matches[3].PHP_EOL;

        }
        else{
            echo 'Nothing found!'.PHP_EOL;
        }

    }else{
        echo 'Nothing found!'.PHP_EOL;
    }

    $input = readline();
}


/*
Problem.1 Arriving in Kathmandu -Technology Fundamentals Final Exam - 14 April 2019 Group I -100%

Your friend is a mountaineer and he needs your help. Your first task is to find him, so you went to Kathmandu and found some notes at his quarters.

Write a program that decrypts messages, which contain information about coordinates. You are looking for names of peaks in the Himalayas and their geohash coordinates. Keep reading lines until you receive the "Last note" message.
Here is your cipher:
Name of the peak
oIt is consisted of letters (upper and lower), numbers and some of the following characters between its letters – "!" "@" "#" "$" "?". Example for valid names: “!@K?#2!#” (K2).
The length of the geohashcode
oBegins after the "=" (equals) sign and is consisted only of numbers.
The geohash code
oBegins after these symbols – "<<", may contain anything and the message always ends with it.
Examples for valid input:
"!Ma$$ka!lu!@=9<<ghtucjdhs" – all the components are there – name of the peek, length of the geohashcode and a geohashcode.
"!@Eve?#rest!#=7<<vbnfhfg"
Examples of invalid input:
"anna@fg<<jhsd@bx!=4" – their order is wrong. The name should be first, the length after and the code last.
"#n...s!n-<<tyuhgf4" – the length is missing and the name contains dots.
"Nan$ga!Parbat=8<<gh2tn – the length of the geohash code doesn't match the given number.
The geohash code you are looking for is with length exactly as much as the given length in the message and the information must be in the exact given order, otherwise it is considered invalid. If you find it, print the following message:
"Coordinates found! {nameOfMountain} -> {geohashcode}"
Otherwise print: “Nothing found!” after every invalid message.
Input / Constraints
You will be receiving strings until you get the “Last note” message.
Output
If you find the right coordinates, print: "Coordinates found! {nameOfMountain} -> {geohashcode}".
If the message is invalid, print: "Nothing found!".
Examples
Input	Output
!@Ma?na?sl!u@=7<<tv58ycb4845
E!ve?rest=.6<<tuvz26
!K@2.,##$=4<<tvnd
!Shiha@pan@gma##9<<tgfgegu67
!###Anna@pur@na##=16<<tv5dekdz8x11ddkc
Last note

Output
Nothing found!
Nothing found!
Nothing found!
Nothing found!
Coordinates found! Annapurna -> tv5dekdz8x11ddkc
Comments
The first line is invalid, because the length – 7, doesn't match the length of the code.
The second line is invalid, because the length should be consisted only of numbers.
The third line is invalid, because the name contains symbols that are not allowed – ".", ",".
The forth line is invalid, because the "=" sign before the length is missing.
The fifth line is valid, so we print the appropriate message.

Input
Ka?!#nch@@en@ju##nga@=3<<thfbghvn
=9Cho?@#Oyu<<thvb7ydht
Nan??ga#Par!ba!t?=16<<twm03q2rx5hpmyr6
Dhau??la#gi@ri?!#=3<<bvnfhrtiuy
Last note

Output
Nothing found!
Nothing found!
Coordinates found! NangaParbat -> twm03q2rx5hpmyr6
Nothing found!


 */