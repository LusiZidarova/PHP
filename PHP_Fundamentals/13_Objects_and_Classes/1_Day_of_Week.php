<?php
$day = readline();
$myDate = new DateTime($day);
echo $myDate->format('l');

/*
 * 1.Day of Week
You are given a date in format "{day}-{month}-{year}". Calculate and print the day of week in English.
Examples
Input	Output
18-04-2016	Monday
27-11-1996	Wednesday
Hints
Read the date as string from the Console.
Use DateTime() to convert the input string to object of type DateTime
Format the received date with 'l' - this will return a full textual representation of the day of the week
You can see here for more details
 */