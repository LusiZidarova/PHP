<?php
$commands = explode(' ',readline());
$output = 0;
$current = 0;
$lowers =range('a','z');
$lower=array_combine(range(1, count($lowers)), $lowers);
$lowers = array_flip($lower);
$uppers = range('A','Z');
$upper=array_combine(range(1, count($uppers)), $uppers);
$uppers = array_flip($upper);

foreach ($commands as $word) {
    $length = strlen($word);
    $first = substr($word, 0, 1);
    $last = substr($word, $length - 1, 1);
    $digit = substr($word, 1, $length - 2);

    if(key_exists($first,$lowers)){
        $current += $digit*$lowers[$first];
    }
    if(key_exists($first,$uppers)){
        $current += $digit/$uppers[$first];
    }
    if(key_exists($last,$lowers)){
        $current += $lowers[$last];
    }
    if(key_exists($last,$uppers)){
        $current -= $uppers[$last];
    }
    $output += $current;
    $current =0;
}
echo number_format($output,2,'.','');

/*
8.Letters Change Numbers  - 100%
Nakov likes Math. But he also likes the English alphabet a lot. He invented a game with numbers and letters from the English alphabet. The game was simple. You get a string consisting of a number between two letters. Depending on whether the letter was in front of the number or after it you would perform different mathematical operations on the number to achieve the result.
First you start with the letter before the number.
If it's uppercase you divide the number by the letter's position in the alphabet.
If it's lowercase you multiply the number with the letter's position in the alphabet.
Then you move to the letter after the number.
If it's uppercase you subtract its position from the resulted number.
If it's lowercase you add its position to the resulted number.
But the game became too easy for Nakov really quick. He decided to complicate it a bit by doing the same but with multiple strings keeping track of only the total sum of all results. Once he started to solve this with more strings and bigger numbers it became quite hard to do it only in his mind. So he kindly asks you to write a program that calculates the sum of all numbers after the operations on each number have been done.
For example, you are given the sequence "A12b s17G":
We have two strings – "A12b" and "s17G". We do the operations on each and sum them. We start with the letter before the number on the first string. A is Uppercase and its position in the alphabet is 1. So we divide the number 12 with the position 1 (12/1 = 12). Then we move to the letter after the number. b is lowercase and its position is 2. So we add 2 to the resulted number (12+2=14). Similarly for the second string s is lowercase and its position is 19 so we multiply it with the number (17*19 = 323). Then we have Uppercase G with position 7, so we subtract it from the resulted number (323 – 7 = 316). Finally, we sum the 2 results and we get 14 + 316=330.
Input
The input comes from the console as a single line, holding the sequence of strings. Strings are separated by one or more white spaces.
The input data will always be valid and in the format described. There is no need to check it explicitly.
Output
Print at the console a single number: the total sum of all processed numbers rounded up to two digits after the decimal separator.
Constraints
The count of the strings will be in the range [1 … 10].
The numbers between the letters will be integers in range [1 … 2 147 483 647].
Time limit: 0.3 sec. Memory limit: 16 MB.
Examples
Input	                     Output	   Comment
A12b s17G	                 330.00	   12/1=12, 12+2=14, 17*19=323, 323–7=316, 14+316=330
P34562Z q2576f  H456z	    46015.13
a1A	                        0.00


Наков харесва Математиката. Но той също много харесва английската азбука. Той измисли игра с цифри и букви от английската азбука. Играта беше проста. Получавате низ, състоящ се от число между две букви. В зависимост от това дали буквата е пред номера или след нея, вие ще извършвате различни математически операции върху числото, за да постигнете резултата.
Първо започвате с буквата преди номера.
Ако е главно, разделяте числото по позицията на буквата в азбуката.
Ако е малки букви, умножете числото с позицията на буквата в азбуката.
След това преминавате към буквата след номера.
Ако това е главна буква, изваждате нейната позиция от полученото число.
Ако е малки букви, добавете позицията му към полученото число.
Но играта стана твърде лесна за Наков наистина бърза. Той реши да го усложни малко, като направи същото, но с множество низове, като следи само общата сума от всички резултати. След като той започна да разрешава това с повече струни и по-големи числа, стана доста трудно да се направи само в ума му. Затова той любезно ви моли да напишете програма, която изчислява сумата от всички числа след извършване на операциите върху всяко число.
Например, ви се дава последователност "A12b s17G":
Имаме две ст руни - "A12b" и "s17G". Правим операциите върху всяка и ги сумираме. Започваме с буквата преди числото на първия низ. A е главна и позицията му в азбуката е 1. Така че делим числото 12 с позицията 1 (12/1 = 12). След това преминаваме към буквата след номера. b е малки букви и позицията му е 2. Така че добавяме 2 към полученото число (12 + 2 = 14). По същия начин за втория низ s е малки букви и позицията му е 19, така че го умножаваме с числото (17 * 19 = 323). Тогава имаме главна буква G с позиция 7, така че я изваждаме от полученото число (323 - 7 = 316). Накрая обобщаваме 2 резултата и получаваме 14 + 316 = 330.
Вход
Входът идва от конзолата като един ред, като държи последователността на низовете. Низовете са разделени с едно или повече бели интервали.
Входните данни винаги ще бъдат валидни и в описания формат. Не е необходимо да го проверявате изрично.
продукция
Отпечатайте на конзолата едно число: общата сума на всички обработени числа се закръгля до две цифри след десетичния разделител.
 */