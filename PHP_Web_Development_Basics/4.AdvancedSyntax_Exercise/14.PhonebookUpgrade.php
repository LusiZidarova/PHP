<?php

$input = readline();
$phonebook = [];
while ($input != "END") {
    $commands = explode(" ", $input);

    switch ($commands[0]) {
        case "A":
            $name = $commands[1];
            $phone = $commands[2];
            if (!key_exists($name, $phonebook)) {
                $phonebook[$name] = $phone;
            } else {
                $phonebook[$name] = $phone;
            }
            break;
        case "S":
            $name = $commands[1];
            if (!key_exists($name, $phonebook)) {
                echo "Contact $name does not exist." . PHP_EOL;
            } else {
                echo "$name -> $phonebook[$name]" . PHP_EOL;
            }
            break;
        case "ListAll":
            ksort($phonebook);
           foreach ($phonebook as $name => $number){
               echo "$name -> $number " . PHP_EOL;
           }
            break;

    }
    $input = readline();
}
/*
 * 14. Phonebook Upgrade -100/100 PHP-Web-Dev-Basics-Exercises Advanced Syntax and Operations - Exercise
Add functionality to the phonebook from the previous task to print all contacts ordered lexicographically when receive the command “ListAll”.
Examples
Input	Output
A Nakov +359888001122
A RoYaL(Ivan) 666
A Gero 5559393
A Simo 02/987665544
ListAll
END
Output
Gero -> 5559393
Nakov -> +359888001122
RoYaL(Ivan) -> 666
Simo -> 02/987665544
Hints
⦁	Variant I (slower): Sort all entries in the dictionary by key and print them.
⦁	Variant II (faster): Keep the entries in more appropriate data structure that will keep them in sorted order for better performance.

 */