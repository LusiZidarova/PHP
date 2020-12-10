<?php

$britishPound = floatval(readline());

$dollars = number_format($britishPound *1.31, 3);

echo $dollars;

/*
5. Pounds to Dollars
Write a program that converts British pounds(real number) to dollars formatted to 3th decimal point.
1 British Pound = 1.31 Dollars
Examples
Input Output
80 104.800
39 51.090
 */
