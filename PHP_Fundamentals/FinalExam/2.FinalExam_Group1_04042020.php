<?php
$pattern = '/::([A-Z]{1}[a-z]{2,})::|\*\*([A-Z]{1}[a-z]{2,})\*\*/';
//$pattern = '/([::|**]{2})([A-Z{1}][a-z]{2,})(\1)/';
$numbers = '/([1-9]{1,})/';

$input = readline();
if(preg_match_all($pattern,$input,$matches) && preg_match_all($numbers,$input,$matchNumbers)){

    foreach ($matchNumbers[0] as $numbers){
        $threshold .=$numbers;
    }

    $sumThreshold = 1;
    for ($i=0; $i<strlen($threshold); $i++){
        $sumThreshold *=$threshold[$i];
    }
    echo "Cool threshold: $sumThreshold ".PHP_EOL;

    $emojis = [];
    foreach ($matches[0] as $emoji){
        $emojiCount = str_replace(['**','::'],'',$emoji);

       $count = 0;
        for ($j=0; $j<strlen($emojiCount); $j++){
            $count += ord($emojiCount[$j]);
        }
        $emojis[$emoji] = $count;
    }
}

echo count($emojis).' emojis found in the text. The cool ones are:'.PHP_EOL;

foreach ($emojis as $emoji => $value){
    if($value > $sumThreshold ){
        echo $emoji.PHP_EOL;
    }
}

/*
Programming Fundamentals Final Exam 04.04.2020
Problem 2. Emoji Detector
Your task is to write program which extracts emojis from a text and find the threshold based on the input.
You have to get your cool threshold. It is obtained by multiplying all the digits found in the input.  The cool threshold could be a very big number, so be mindful.
An emoji is valid when:
Is surrounded by either :: or ** (exactly 2)
Is at least 3 characters long (without the surrounding symbols)
Starts with a capital letter
Continues with lowercase letters only
Examples of valid emojis: ::Joy::, **Banana**, ::Wink::
Examples of invalid emojis: ::Joy**, ::fox:es:, **Monk3ys**, :Snak::Es::
You need to count all valid emojis in the text and calculate their coolness. The coolness of the emoji is determined by summing all the ASCII values of all letters in the emoji.
Examples: ::Joy:: - 306, **Banana** - 577, ::Wink:: - 409
You need to print the result of cool threshold and after that to take all emojis out of the text, count them and print the only the cool ones on the console.
Input
On the single input you will receive a piece of string.
Output
On the first line of the output print the obtained Cool threshold in format:
Cool threshold: {coolThresholdSum}
On the next line print the count of all emojis found in the text in format:
{countOfAllEmojis} emojis found in the text. The cool ones are:
{cool emoji 1}
{cool emoji 2}
{…}
If there are no cool ones, just don't print anything in the end.
Constraints
There will always be at least one digit in the text!
Examples
Input	Output
In the Sofia Zoo there are 311 animals in total! ::Smiley:: This includes 3 **Tigers**, 1 ::Elephant:, 12 **Monk3ys**, a **Gorilla::, 5 ::fox:es: and 21 different types of :Snak::Es::. ::Mooning:: **Shy**	Cool threshold: 540
4 emojis found in the text. The cool ones are:
::Smiley::
**Tigers**
::Mooning::
Comments
You can see all the valid emojis in green. There are various reasons why the rest are not valid, examine them carefully. The "cool threshold" is 3*1*1*3*1*1*2*3*5*2*1 = 540.
::Smiley:: -> 83 + 109 + 105 + 108 + 101 + 121 = 627 > 540 -> cool
**Tigers** -> 84 + 105 + 103 + 101 + 114 + 115 = 622 > 540 -> cool
::Mooning:: -> 77 + 111 + 111 + 112 + 105 + 112 + 103 = 727 > 540 -> cool
**Shy** -> 83 + 104 + 121 = 308 < 540 -> not cool
At the end we print the count of all valid emojis found and each of the cool ones on a new line.
Input	Output
5, 4, 3, 2, 1, go! The 1-th consecutive banana-eating contest has begun! ::Joy:: **Banana** ::Wink:: **Vali** ::valid_emoji::	Cool threshold: 120
4 emojis found in the text. The cool ones are:
::Joy::
**Banana**
::Wink::
**Vali**
Input	Output
It is a long established fact that 1 a reader will be distracted by 9 the readable content of a page when looking at its layout. The point of using ::LoremIpsum:: is that it has a more-or-less normal 3 distribution of 8 letters, as opposed to using 'Content here, content 99 here', making it look like readable **English**.	Cool threshold: 17496
1 emojis found in the text. The cool ones are:
Comments
You can see **English** is a valid emoji, but the sum of ascii is not bigger than cool threshold, that's why we don't print anything in the end.

//$pattern = '/((?<=::)[A-Z]{1}[a-z]{2,}(?=::))|((?<=\*\*)[A-Z]{1}[a-z]{2,}(?=\*\*))/';
 */