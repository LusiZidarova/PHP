<?php
$c = intval(readline());

$yers = (int)($c*100);
$days = (int)($yers*365.242);
$hours = (int)($days*24);
$minutes = (int)($hours*60);

echo $c.' centuries = '.$yers.' years = '.$days.' days = '.$hours.' hours = '.$minutes.' minutes';


/*
4. Centuries to Minutes
Write program to enter an integer number of centuries and convert it to years, days, hours and minutes.
Examples
Input Output
1      1 centuries = 100 years = 36524 days = 876576 hours = 52594560 minutes
5       5 centuries = 500 years = 182621 days = 4382904 hours = 262974240 minutes
Hints
 Use appropriate data type to fit the result after each data conversion.
 Assume that a year has 365.2422 days at average (the Tropical year).
 */
