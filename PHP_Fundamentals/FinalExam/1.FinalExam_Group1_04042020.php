<?php
$string = readline();
$input = readline();

while($input != 'Generate'){
    $commands = explode('>>>',$input);

    switch ($commands[0]){

        case 'Contains':
            $substring = $commands[1];
            if(strstr($string,$substring)){
                echo "$string contains $substring".PHP_EOL;
            }else{
                echo "Substring not found!".PHP_EOL;
            }
            break;
        case 'Slice':
            $starIndex = $commands[1];
            $endIndex = $commands[2];

            $slice = substr($string,$starIndex,$endIndex-$starIndex);
            $string = str_replace($slice,'',$string);
            echo $string.PHP_EOL;
           break;
        case 'Flip':
            $command = $commands[1];
            $starIndex = $commands[2];
            $endIndex = $commands[3];
            $slice = substr($string,$starIndex,$endIndex-$starIndex);
            if($command == 'Upper'){
                $string = str_replace($slice,strtoupper($slice),$string);
                echo $string.PHP_EOL;
            }
            if($command == 'Lower'){
                $string = str_replace($slice,strtolower($slice),$string);
                echo $string.PHP_EOL;
            }
            break;
    }
    $input=readline();
}
echo "Your activation key is: $string";

/*
 * Programming Fundamentals Final Exam 04.04.2020
Problem 1. Activation Keys - 100%
You are about to make some good money, but first you need to think of a way to verify who paid for your product and who didn`t. You have decided to let people use the software for a free trial period and then require an activation key in order to continue to use the product. The last step before you could cash out is to design a program that creates unique activation keys for each user. So, waste no more time and start typing!

The first line of the input will be your raw activation key. It will consist of letters and numbers only.
After that, until the "Generate" command is given, you will be receiving strings with instructions for different operations that need to be performed upon the raw activation key.
There are several types of instructions, split by ">>>":
Contains>>>{substring} – checks if the raw activation key contains the given substring.
oIf it does prints: "{raw activation key} contains {substring}".
oIf not, prints: "Substring not found!"
Flip>>>Upper/Lower>>>{startIndex}>>>{endIndex}
oChanges the substring between the given indices (the end index is exclusive) to upper or lower case.
oAll given indexes will be valid.
oPrints the activation key.
Slice>>>{startIndex}>>>{endIndex}
oDeletes the characters between the start and end indices (end index is exclusive).
oBoth indices will be valid.
oPrints the activation key.
Input
The first line of the input will be string and it will consist of letters and numbers only.
After the first line, until the "Generate" command is given, you will be receiving strings.
Output
After the "Generate" command is received, print:
o"Your activation key is: {activation key}"
Examples
Input	Output
abcdefghijklmnopqrstuvwxyz
Slice>>>2>>>6
Flip>>>Upper>>>3>>>14
Flip>>>Lower>>>5>>>7
Contains>>>def
Contains>>>deF
Generate

Output
abghijklmnopqrstuvwxyz
abgHIJKLMNOPQRstuvwxyz
abgHIjkLMNOPQRstuvwxyz
Substring not found!
Substring not found!
Your activation key is: abgHIjkLMNOPQRstuvwxyz
Comments
1.Slice>>2>>6
abcdefghijklmnopqrstuvwxyz becomes abghijklmnopqrstuvwxyz
2.Flip>>>Upper>>>3>>>14
abghijklmnopqrstuvwxyz becomes abgHIJKLMNOPQRstuvwxyz
3.Flip>>>Lower>>>5>>>7
abgHIJKLMNOPQRstuvwxyz becomes abgHIjkLMNOPQRstuvwxyz
4.Contains>>>def
abgHIjkLMNOPQRstuvwxyz does not contain def
5.Contains>>>deF
abgHIjkLMNOPQRstuvwxyz does not contain deF
The final activation key is abgHIjkLMNOPQRstuvwxyz.

Input
134softsf5ftuni2020rockz42
Slice>>>3>>>7
Contains>>>-rock
Contains>>>-uni-
Contains>>>-rocks
Flip>>>Upper>>>2>>>8
Flip>>>Lower>>>5>>>11
Generate

Output
134sf5ftuni2020rockz42
Substring not found!
Substring not found!
Substring not found!
134SF5FTuni2020rockz42
134SF5ftuni2020rockz42
Your activation key is: 134SF5ftuni2020rockz42
 */