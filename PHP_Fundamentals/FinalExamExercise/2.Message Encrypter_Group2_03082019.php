<?php
$n = readline();
$pattern = '/(?<title>@([A-Za-z]{3,})@|\*([A-Za-z]{3,})\*):\s\[(?<firstLetter>[A-Z]|[a-z])\]\|\[(?<secondLetter>[A-Z]|[a-z])\]\|\[(?<thirdLetter>[A-Z]|[a-z])\]\|$/';

for($i=0;$i<$n;$i++){
    $input = readline();
    if(preg_match_all($pattern,$input,$matches)){
        $title = str_replace(['*','@'],'',$matches['title']);
        $first = $matches['firstLetter'];
        $second = $matches['secondLetter'];
        $third = $matches['thirdLetter'];
        echo $title[0].': '.ord($first[0]).' '.ord($second[0]).' '.ord($third[0]).PHP_EOL;

    }else {
        echo 'Valid message not found!'.PHP_EOL;
    }

}

/*
 * Message Encrypter - Programming Fundamentals Final Exam - 03 August 2019 Group 2 - 90%
Create a program, that checks if inputs have a valid message and encrypt it. On the first line you will receive a number that indicates how many inputs you will receive on the next lines.
A message is valid when:
-It is in the end of the input
-It starts with a tag, which is surrounded by either '*' or '@' (but not both at the same time), the tag itself has to be minimum 3 characters long, start with a uppercase letter, followed only by lowercase letters
-There is a colon and a single white space after the tag
-There are 3 groups consisting of letters between '[' and ']', followed by a pipe ('|')
Example for a valid message:
"*Request*: [I]|[s]|[i]| "
You must check if the message is valid and if it is- decrypt it, if it isn’t- print the following message:
"Valid message not found!"
Encrypting a message means to take all letters and turn them into ASCII numbers. After successful encrypt, print it in the following format:
{tag}: {number1} {number2} {number3} (…)
Input
On the first line - n - the count of inputs.
On the next n lines - input that you have to check if it has a valid message.
Output
Print all results from each input, each on a new line.

Examples
Input	Output	Comment
3
*Request*: [I]|[s]|[i]|
*Taggy@: [73]|[73]|[73]|
Should be valid @Taggy@: [v]|[a]|[l]|

Output
Request: 73 115 105
Valid message not found!
Taggy: 118 97 108
Comment>
We have 3 input lines to check.
The first one follows the rules and is valid. The second one doesn’t because the tag is surrounded by both '*' and '@'. The third one has a valid message and is in the end of the input.

Input
3
@Taggy@: [i]|[n]|[v]|[a]|[l]|[i]|[d]| this shouldn’t be valid
*tAGged*: [i][i][i]|
Should be invalid @Taggy@: [v]|[a]|[l]|[l]|[l]|

Output
Valid message not found!
Valid message not found!
Valid message not found!
 */