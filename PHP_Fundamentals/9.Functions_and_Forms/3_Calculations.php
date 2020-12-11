<?php
$command = readline();
calculations($command);
   
function calculations($command){
    $a = readline();
    $b = readline();
    switch ($command){
        case 'add': add($a,$b);
             break;
        case 'multiply': multiply($a,$b);
             break;
        case 'subtract': subtract($a,$b);
             break;
        case 'divide': divide($a,$b);
             break;
 }
}
function add($a,$b){
    $result = $a+$b;
    echo $result;
}
function multiply($a,$b){
   $result = $a*$b;
    echo $result;
}
function subtract($a, $b){
   $result = $a-$b;
    echo $result;
}
function divide($a,$b){
   $result = $a/$b;
    echo $result;
}

/*
 * 3. Calculations
 * Write a program that receives a string on the first line (add, multiply, subtract, divide) and on the next two lines
receives two numbers. Create four functions (for each calculation) and invoke the right one depending on the
command. The function should also print the result.
Example
Input Output
subtract
5
4

1

divide
8
4

2

Hints
Read the command on the first line and the two numbers, and then make an if/switch statement for each type of
calculation

$command = readline();
$a = readline();
 * $b = readline();
 * 
 * switch($command)
{case 'add'¨:add($a,$b);
 * break;
 * }
 * Then create the four functions and print the result.
 *  *  */