<?php
$input = readline();
$phonebook =[];
while($input != "END"){
    $commands = explode(" ",$input);

    switch($commands[0]){
        case "A":
            $name = $commands[1];
            $phone = $commands[2];
                if(!key_exists($name,$phonebook)){
                    $phonebook[$name]= $phone;
                }else{
                    $phonebook[$name]= $phone;
                }
            break;
        case "S":
            $name = $commands[1];
            if(!key_exists($name,$phonebook)){
               echo "Contact $name does not exist.".PHP_EOL;
            }else{
                echo "$name -> $phonebook[$name]".PHP_EOL;
            }
            break;
    }
    $input = readline();
}

/*
 * 13. Phonebook -100/100 PHP-Web-Dev-Basics-Exercises Advanced Syntax and Operations - Exercise
Write a program that receives some info from the console about people and their phone numbers. Each entry should have just one name and one number (both of them strings).
On each line you will receive some of the following commands:
⦁	A {name} {phone} – adds entry to the phonebook. In case of trying to add a name that is already in the phonebook you should
 change the existing phone number with the new one provided.
⦁	S {name} – searches for a contact by given name and prints it in format "{name} -> {number}". In case the contact
isn't found, print "Contact {name} does not exist.".
⦁	END – stop receiving more commands.
Examples
Input	Output
A Nakov 0888080808
S Mariika
S Nakov
END
Output
Contact Mariika does not exist.
Nakov -> 0888080808

Input
A Nakov +359888001122
A RoYaL(Ivan) 666
A Gero 5559393
A Simo 02/987665544
S Simo
S simo
S RoYaL
S RoYaL(Ivan)
END
Output
Simo -> 02/987665544
Contact simo does not exist.
Contact RoYaL does not exist.
RoYaL(Ivan) -> 666
Input
A Misho +359883123
A Misho 02/3123
S Misho
END
Output
Misho -> 02/3123
Hints

 */