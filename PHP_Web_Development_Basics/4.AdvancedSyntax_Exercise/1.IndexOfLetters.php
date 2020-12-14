<?php
$input = strtolower(readline());
$alphabetic = "abcdefghijklmnopqrstuvwxyz";
for($i=0; $i<strlen($input); $i++){
    echo $input[$i]." -> ".strpos($alphabetic,$input[$i]).PHP_EOL;
}


/*
 * 1.Index of Letters -100/100 -PHP-Web-Dev-Basics-Exercises Advanced Syntax and Operations - Exercise
 * //$alphabetic = ["a"=>0,"b"=>1,"c"=>2,"d"=>3,"e"=>4,"f"=>5,"g"=>6,"h"=>7,"i"=>8,"j"=>9,"k"=>10,"l"=>11,"m"=>12,"n"=>13,"o"=>14,"p"=>15,"q"=>16,"r"=>17,"s"=>18,"t"=>19,"u"=>20,"v"=>21,"w"=>22,"x"=>23,"y"=>24,"z"=>25];
Write a program that creates an array containing all letters from the alphabet (a-z). Read a lowercase word from the console and print the index of each of its letters from the letters array.
Examples
Input
abcz
Output
a -> 0
b -> 1
c -> 2
z -> 25

Input
softuni
Output
s -> 18
o -> 14
f -> 5
t -> 19
u -> 20
n -> 13
i -> 8

 */