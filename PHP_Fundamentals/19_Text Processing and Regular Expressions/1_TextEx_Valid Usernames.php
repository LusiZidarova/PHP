<?php
$strings = explode(', ',readline());

foreach($strings as $username){
    $length = strlen($username);
    if($length >= 3 && $length <= 16){
        $isValid = true;

        for($i=0; $i<$length; $i++){
            $char = $username[$i];
            if(!(ctype_alnum($char) || $char === '-' || $char==='_')){
                $isValid = false;
                break;
            }
        }
        if($isValid){
            echo $username . PHP_EOL;
        }
    }
}

/*
1.Valid Usernames - 100%
Write a program that reads usernames on a single line (joined by ", ") and prints all valid usernames.
A valid username is:
Has length between 3 and 16 characters
Contains only letters, numbers, hyphens and underscores
Has no redundant symbols before, after or in between
Examples
Input	Output
sh, too_long_username, !lleg@l ch@rs, jeffbutt
6ozwbnuhv bfgf3


Output
jeffbutt

Input
Jeff, john45, ab, cd, peter-ivanov, @smith

Output
Jeff
john45
peter-ivanov
 */