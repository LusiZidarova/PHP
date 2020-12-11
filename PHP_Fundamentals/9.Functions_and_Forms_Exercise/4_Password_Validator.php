<?php
//$pass = readline();
$pass = 'logIn';


checkPass($pass);

function checkPass($pass){
    
    $valid = true;
 
    if(strlen($pass)<6 || strlen($pass)>10){
       echo 'Password must be between 6 and 10 characters'.PHP_EOL;
       $valid = false;
    }
    
    if(!ctype_alnum($pass)){
         echo 'Password must consist only of letters and digits'.PHP_EOL;
         $valid = false;
    }
    $count = 0;
        for ($i = 0; $i < strlen($pass); $i++) {
            if(is_numeric($pass[$i])){
                $count++;
            }
        }
    if($count < 2){
         echo 'Password must have at least 2 digits'.PHP_EOL;
         $valid = false;
    }
        
    if($valid){
        echo 'Password is valid';
    } 
      
    
}

/*
4.Password Validator
Write a program that checks if a given password is valid. Password rules are:
6 – 10 characters (inclusive)
Consists only of letters and digits
Have at least 2 digits 
If a password is valid print “Password is valid”. If it is not valid, for every unfulfilled rule print a message:
"Password must be between 6 and 10 characters"
"Password must consist only of letters and digits"
"Password must have at least 2 digits"
 * 
Examples
Input	Output
logIn	Password must be between 6 and 10 characters
        Password must have at least 2 digits
 * ****************************************
MyPass123	Password is valid
 * ********************************************
Pa$s$s	Password must consist only of letters and digits
        Password must have at least 2 digits
Hints
Write a function for each rule.
 */