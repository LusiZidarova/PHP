<?php
$a = intval(readline());
$b = intval(readline());;

echo 'Before:'.PHP_EOL;;
echo 'a = '.$a.PHP_EOL;
echo 'b = '.$b.PHP_EOL;

$temp = $a;
$a = $b;
$b= $temp;

echo 'After:'.PHP_EOL;
echo 'a = '.$a.PHP_EOL;
echo 'b = '.$b.PHP_EOL;


/*
1. Exchange Integers
Read two integer numbers and after that exchange their values by using some programming logic. Print the variable
values before and after the exchange, as shown below:
Examples
Input Output
5
10
Before:
a = 5
b = 10
After:
a = 10
b = 5
Hints
You may use a temporary variable to remember the old value of a, then assign the value of b to a, then assign the
value of the temporary variable to b.
 */

