<?php
$strings = explode(' ',readline());
$str1 = $strings[0];
$str2 = $strings[1];
$mid = $str1;

if(strlen($str1) > strlen($str2)){
    $str1 = $str2;
    $str2 = $mid;
}
$sum = 0;
for($i=0; $i<strlen($str1);$i++){
    $sum+= ord($str1[$i])*ord($str2[$i]);
}
for($j=strlen($str2)-1;$j>=strlen($str1);$j--){
    $sum+= ord($str2[$j]);
}
echo $sum;

/*
2.Character Multiplier - 100%
Create a method that takes two strings as arguments and returns the sum of their character
 codes multiplied (multiply str1[0] with str2[0] and add to the total sum). Then continue
 with the next two characters. If one of the strings is longer than the other, add the
remaining character codes to the total sum without multiplication.
Examples
Input	                Output
Gosho Pesho	            53253
123 522	                7647
a aaaa	                9700
 */