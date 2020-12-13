<?php
$input = readline();
$explosion  = 0;
for($i=0;$i<strlen($input);$i++){
   if($explosion > 0 && $input[$i] != '>'){
       $input = substr_replace($input,'',$i,1);
       $explosion--;
       $i--;
   }else if($input[$i] == '>'){
       $explosion+= $input[$i+1];
   }
}
   echo $input;

/***
7.String Explosion - 100%
Explosions are marked with ‘>’. Immediately after the mark, there will be an integer, which signifies the strength of the explosion.
You should remove x characters (where x is the strength of the explosion), starting after the punch character (‘>’).
If you find another explosion mark (‘>’) while you’re deleting characters, you should add the strength to your previous explosion.
When all characters are processed, print the string without the deleted characters.
You should not delete the explosion character – ‘>’, but you should delete the integers, which represent the strength.
Input
You will receive single line with the string.
Output
Print what is left from the string after explosions.
Constraints
You will always receive a strength for the punches
The path will consist only of letters from the Latin alphabet, integers and the char ‘>’
The strength of the punches will be in the interval [0…9]
Examples
Input
abv>1>1>2>2asdasd

Output
abv>>>>dasd
Comments
1st explosion is at index 3 and it is with strength of 1. We delete only the digit after the explosion character. The string will look like this: abv>>1>2>2asdasd
2nd explosion is with strength one and the string transforms to this: abv>>>2>2asdasd
3rd explosion is now with strength of 2. We delete the digit and we find another explosion. At this point the string looks like this: abv>>>>2asdasd.
4th explosion is with strength 2. We have 1 strength left from the previous explosion, we add the strength of the current explosion to what is left and that adds up to a total strength of 3. We delete the next three characters and we receive the string abv>>>>dasd
We do not have any more explosions and we print the result: abv>>>>dasd

Input
pesho>2sis>1a>2akarate>4hexmaster

Output
pesho>is>a>karate>master

Translate:
Взривовете са маркирани с „>“. Веднага след маркировката ще има цяло число, което означава силата на експлозията.
Трябва да премахнете x знаци (където x е силата на експлозията), като се започне след символа за удар ('>').
Ако намерите друг знак за експлозия ('>'), докато изтривате знаци, трябва да добавите сила към предишния си взрив.
Когато всички символи се обработват, отпечатайте низ без изтритите символи.
Не трябва да изтривате знака на експлозията - '>', но трябва да изтриете целите числа, които представляват силата.
Вход
Ще получите един ред с низа.
продукция
Разпечатайте останалото от низ след експлозии.
Ограничения
 Винаги ще получавате сила за ударите
 Пътят ще се състои само от букви от латинската азбука, цели числа и знака '>'
 Силата на ударите ще бъде в интервала [0… 9]

Commenst: 1-ва експлозия е в индекс 3 и е със сила 1. Изтриваме само цифрата след символа на експлозията. Низът ще изглежда така: abv >> 1> 2> 2asdasd
Втората експлозия е със сила една и струната се трансформира към това: abv >>> 2> 2asdasd
3-та експлозия е със сила 2. Изтриваме цифрата и откриваме друга експлозия. В този момент низът изглежда така: abv >>>> 2asdasd.
Четвъртият взрив е със сила 2. Имаме 1 сила останала от предишната експлозия, добавяме силата на текущата експлозия към останалото и това добавя до обща сила 3. Изтриваме следващите три знака и получаваме string abv >>>> dasd
Нямаме повече експлозии и отпечатваме резултата: abv >>>> dasd
 */