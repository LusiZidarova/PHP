<?php
$input = explode(', ',readline());
$towns = [];
for ($i=0; $i <count($input);$i+=2){
    if(!isset($towns[$input[$i]])){
       $towns[$input[$i]]=0;
       $num = $input[$i+1];
        $towns[$input[$i]] += $num;
    }else{
        $num = $input[$i+1];
        $towns[$input[$i]] += $num;
    }
}
foreach ($towns as $key => $value){
    echo $key .' => '.$value.PHP_EOL;
}
/*
4. Sum by Town - Judge 100%
Read towns and incomes (on a single line) and print an array holding the total income for each town (see below).
Print the towns in their natural order as object properties.
Examples

Input Output
Sofia, 20, Varna, 10, Sofia, 5
Output
Sofia => 25
Varna => 10

Plovdiv, 40, Pernik, 20, Vidin, 8, Sliven, 44, Plovdiv, 1, Vidin, 7, Chirpan, 0

Output
Plovdiv => 41
Pernik => 20
Vidin => 15
Sliven => 44
Chirpan => 0


 */