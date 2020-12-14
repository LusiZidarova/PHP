<?php
$month = [1=>"January", 2=>"February", 3=>"March", 4=>"April", 5=>"May", 6=>"June",  7=>"July", 8=>"August",
    9=>"September", 10=>"October", 11=>"November", 12=>"December"];
$num = intval(readline());

if(key_exists($num,$month)){
    echo $month[$num];
}else {
    echo "Invalid Month!";
}
/*
 * 01.Print Month - 100/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
Enter a month number [1…12] and print the month name (in English) or “Invalid Month!”. Use an array of strings.
Examples
Input	Output
2	February
8	August
12	December
14	Invalid Month!
Hints
⦁	Use an array of strings holding the day names: {"January", "February", "March", "April", "May", "June",  "July", "August", "September", "October", "November", "December"}.
⦁	Print the element at index (month-1) when it is in the range [1…12] or “Invalid Month!” otherwise.

 */