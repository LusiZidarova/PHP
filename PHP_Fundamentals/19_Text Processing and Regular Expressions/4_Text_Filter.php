<?php
$bans = explode(', ',readline());
$text = readline();

$newText = $text;

foreach($bans as $ban){
    $count = strlen($ban);
    $newText = str_replace($ban,str_repeat('*',$count),$newText);
}
echo $newText;

/*
4.Text Filter - 100%
Write a program that takes a text and a string of banned words. All words included in the ban list should be replaced with asterisks "*", equal to the word's length. The entries in the ban list will be separated by a comma and space ", ".
The ban list should be entered on the first input line and the text on the second input line.
Examples
Input	Output
Linux, Windows
It is not Linux, it is GNU/Linux. Linux is merely the kernel,
while GNU adds the functionality. Therefore we owe it to them by
 calling the OS GNU/Linux! Sincerely, a Windows client
It is not *****, it is GNU/*****. ***** is merely the kernel,
while GNU adds the functionality. Therefore we owe it to them by
calling the OS GNU/*****! Sincerely, a ******* client
Hints

Linux, Windows
It is not Linux, it is Windows. Linux is merely the kernel Windows.It is not Linux, it is Windows. Linux is merely the kernel Windows.
Read the input.
Replace all ban words in the text with asterisk (*).
oUse the function str_replace().
oUse str_repeat() to create the replacement
 */