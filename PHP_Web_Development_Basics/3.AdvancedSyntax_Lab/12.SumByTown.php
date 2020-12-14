<?php
$input = explode(", ",readline());
$newArray = [];

for($i=0; $i < count($input); $i+=2){
    $town = $input[$i];
    $incomes = $input[$i+1];
    if (!key_exists($town, $newArray)) {
        $newArray[$town] = $incomes;
    } else {
        $newArray[$town] += $incomes;
    }
}

foreach ($newArray as $key=> $value){
    echo $key." => ".$value.PHP_EOL;
}
/*
 * 12.Sum by Town -100/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
Read towns and incomes (like shown below) and print an array holding the total income for each town (see below). Print the towns in their natural order as object properties.
 Examples
Input	Output
Sofia, 20, Varna, 10, Sofia, 5
Output
Sofia => 25
Varna => 10

Input
Plovdiv, 40, Pernik, 20, Vidin, 8, Sliven, 44, Plovdiv, 1, Vidin, 7, Chirpan, 0
Output
Plovdiv => 41
Pernik => 20
Vidin => 15
Sliven => 44
Chirpan => 0

 */