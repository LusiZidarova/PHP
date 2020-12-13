<?php
$word = readline();
$output = '';

for($i=0;$i<strlen($word);$i++){
    $current = ord($word[$i]) +3;
    $output .=  chr($current);
}
echo $output;
/*
4.Caesar Cipher - 100%
Write a program that returns an encrypted version of the same text. Encrypt the text by shifting each
character with three positions forward. For example A would be replaced by D, B would become E, and so on.
 Print the encrypted text.
Examples
Input	                Output
Programming is cool!	Surjudpplqj#lv#frro$
One year has 365 days.	Rqh#|hdu#kdv#698#gd|v1
 */