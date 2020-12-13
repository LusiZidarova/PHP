<?php
$string = readline();
$input = readline();

while($input !== 'Done'){
    $commands = explode(' ',$input);
    $command = $commands[0];
    switch ($command){
        case 'Change':
            $char = $commands[1];
            $replacement = $commands[2];
            $string =  str_replace($char,$replacement,$string);
            echo $string.PHP_EOL;
          break;
        case 'Includes':
            $includesString = $commands[1];
            $arr = preg_split("/[ ,.!:\/]/",$string,null,PREG_SPLIT_NO_EMPTY);
            if(in_array($includesString,$arr)){
                echo 'True'.PHP_EOL;
            }else{
                echo 'False'.PHP_EOL;
            }
            break;
        case 'End':
            $endString = $commands[1];
            $arr = preg_split("/[ ,.!:\/]/",$string,null,PREG_SPLIT_NO_EMPTY);
            $index = count($arr)-1;

            if($endString === $arr[$index]){
                echo 'True'.PHP_EOL;
            }else{
                echo 'False'.PHP_EOL;
            }
            break;
        case 'Uppercase':
            $string= strtoupper($string);
            echo $string.PHP_EOL;
            break;
        case 'FindIndex':
            $findIndex = $commands[1];
            echo strpos($string,$findIndex).PHP_EOL;
            break;
        case 'Cut':
            $startIndex = $commands[1];
            $length= $commands[2];
            echo substr($string,$startIndex,$length);
            break;
    }
    $input = readline();
}

/*
String Manipulator - Programming Fundamentals Final Exam - 03 August 2019 Group 2 - 100%
Create a program that executes changes over a string. First, you are going to receive the string, then commands.
You will be receiv_r($arr);ing commands until the "Done" command. There are six possible commands:
"Change {char} {replacement}"
oReplace all occurences of {char} with {replacement}, then print the string.
"Includes {string}"
oCheck if the string includes with {string} and print "True/False".
"End {string}"
oCheck if the string ends with {string} and print "True/False".
"Uppercase"
oMake the whole string uppercased, then print it.
"FindIndex {char}"
oFind the first index of {char}, then print it.
"Cut {startIndex} {length}"
oRemove all characters from the string except for those starting from {startIndex} and the next {length} characters, then print it.
Input
On the 1st line you are going to receive the string.
On the next lines, until the "Done" command is received, you will be receiving commands.
All commands are case sensitive.
The input will always be valid.
Output
Print the output of every command in the format described above.


Examples
Input	Output
//Th1s 1s my str1ng!//
Change 1 i
Includes string
End my
Uppercase
FindIndex I
Cut 5 5
Done

Output
//This is my string!//
True
False
//THIS IS MY STRING!//
4
S IS
 */