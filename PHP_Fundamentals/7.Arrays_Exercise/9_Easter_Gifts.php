<?php
$gifts = explode(' ',readline());
$count = count($gifts);
$input = readline();

while ($input !== 'No Money') {
    $arg = explode(' ', $input);

    $command = $arg[0];
    $gift = $arg[1];
    
    if($command === 'OutOfStock'){
        for ($i = 0; $i <$count; $i++) {
            if($gifts[$i]===$gift){
                $gifts[$i]='None';
            }
        }
    }elseif ($command === 'Required') {
        $index = $arg[2];
        if($index >= 0 && $index < $count-1){
            $gifts[$index] = $gift;
        }
    } else if($command === "JustInCase") {
        $lastIndex = $count -1;
        $gifts[$lastIndex] = $gift;
    }
    $input = readline();
}

for ($i = 0; $i < $count; $i++) {
    if($gifts[$i] !== 'None'){
        echo $gifts[$i].' ';
    }
}


/*
9. *Easter Gifts
 * As a good friend, you decide to buy presents for your friends.
Create a program that helps you plan the gifts for your friends and family. First, you are going to receive the gifts
you plan on buying оn a single line, separated by space, in the following format:
"{gift 1 } {gift 2 } {gift 3 }… {gift n }"
 * Then you will start receiving commands until you read the "No Money" message. There are three possible
commands:
 "OutOfStock {gift}"
o Find the gifts with this name in your collection, if there are any, and change their values to
"None".

 "Required {gift} {index}"
o Replace the value of the current gift on the given index with this gift, if the index is valid.
 "JustInCase {gift}"
o Replace the value of your last gift with this one.

In the end, print the gifts on a single line, except the ones with value "None", separated by a single space in the
following format:
"{gift 1 } {gift 2 } {gift 3 }… {gift n }"
 * Input / Constraints
 On the 1 st line you are going to receive the names of the gifts, separated by a single space.
 On the next lines, until the "No Money" command is received, you will be receiving commands.
 The input will always be valid.
Output
 Print the gifts in the format described above.
Examples
 * 
 * Input 
Eggs StuffedAnimal Cozonac Sweets EasterBunny Eggs Clothes
OutOfStock Eggs
Required Spoon 2
JustInCase ChocolateEgg
No Money
Output
StuffedAnimal Spoon Sweets EasterBunny
ChocolateEgg

Comments
 */