<?php 

$days = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
//$day = 3;
$day = intval(readline());
if($day>=1 && $day<=7){
    
    echo $days[$day-1];
} else {
    echo 'Invalid Day!';
}
/*1. Day of Week
Enter a day number [1…7] and print the day name (in English) or “Invalid Day!“. Use an array of strings.
Examples
Input Output
1 Monday
2 Tuesday
7 Sunday
0 Invalid Day!*/