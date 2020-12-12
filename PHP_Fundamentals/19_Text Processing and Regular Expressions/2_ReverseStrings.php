<?php
$text = readline();

while($text!=='end'){
    $oldText = $text;
    $revText = strrev($oldText);
    echo $oldText. ' = '.$revText.PHP_EOL;
    $text = readline();
}


/*
 2.Reverse Strings - 100%
You will be given series of strings until you receive an “end” command. Write a program that reverses strings and print word and reversed word on separate line in format "{word} = {reversed word}".
Examples
Input
helLo
Softuni
bottle
end

Output
	helLo = oLleh
Softuni = inutfoS
bottle = elttob

Input
Dog
caT
chAir
end

Output
Dog = goD
caT = Tac
chAir = riAhc

Solution
Use while loop and read strings until you receive "end".

Reverse the string with strrev() function.

Print the reversed string in the specified format.
 */