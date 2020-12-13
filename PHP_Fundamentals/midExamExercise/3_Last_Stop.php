<?php
$paintNumber = explode(' ',readline());
$input = readline();

while($input !== 'END'){
    $commands = explode(' ',$input);
    $command = $commands[0];

    switch ($command){
        case 'Change':
        $paintingNumber = $commands[1];
        $changedNumber = $commands[2];

        if(in_array($paintingNumber,$paintNumber)){
            $index = array_search($paintingNumber,$paintNumber);
            array_splice($paintNumber,$index,1,$changedNumber);
        }
        break;

        case 'Hide':
            $paintingNumber = $commands[1];
            $index = array_search($paintingNumber,$paintNumber);
            if(in_array($paintingNumber,$paintNumber)){
                array_splice($paintNumber,$index,1);
            }
            break;

        case 'Switch':
            $paintingNumber = $commands[1];
            $paintingNumber2 = $commands[2];
            if(in_array($paintingNumber,$paintNumber) && in_array($paintingNumber2,$paintNumber)){

                $index1 = array_search($paintingNumber,$paintNumber);
                $index2 = array_search($paintingNumber2,$paintNumber);
                $change1 = $paintingNumber;
                array_splice($paintNumber,$index1,1,$paintingNumber2);
                array_splice($paintNumber,$index2,1,$change1);
            }
            break;
         case 'Insert':
            $place = $commands[1];
            $paintingNumber = $commands[2];

            if(key_exists($place,$paintNumber)){
                array_splice($paintNumber,$place+1,0,$paintingNumber);
            }
            break;
        case 'Reverse':
            $paintNumber = array_reverse($paintNumber);
            break;
    }
    $input = readline();
}
echo implode(' ',$paintNumber);

/* Last Stop - Technology Fundamentals Mid Exam - 10 March 2019 Group 1 - Judge 100%
The group has reached Paris and went to visit "La Louvre". They accidently found a map behind "The Wedding at Canna" painting. It had some instructions, so they have decided to follow them and see where they will lead them. Your job is to help them.
Create a program that follows instructions in order to fulfil a quest. First, you will receive a collection of numbers – each representing a painting number. After that, you are going to be receiving instructions, until the "END" command is given.
-Change {paintingNumber} {changedNumber} – find the painting with the first number in the collection (if it exists) and change its number with the second number – {changedNumber}.
-Hide {paintingNumber} – find the painting with this value and if it exists and hide it (remove it).
-Switch {paintingNumber} {paintingNumber2} – find the given paintings in the collections if they exist and switch their places.
-Insert {place} {paintingNumber} – insert the painting (paintingNumber) on the next place after the given one, if it exists.
-Reverse – you must reverse the order of the paintings.
Once you complete the instructions, print the numbers of the paintings on a single line, split by a space.
Input / Constraints
On the 1st line, you are going to receive the numbers of the paintings, split by a single space – integer numbers in the range [1…1000]
On the next lines, you are going to receive commands, until you receive the "END" command
Output
Print the message you have received after the conversion of all numbers on a single line
Examples
Input	Output	Comments
115 115 101 114 73 111 116 75
Insert 5 114
Switch 116 73
Hide 75
Reverse
Change 73 70
Insert 10 85
END

Output:
 70 114 111 116 114 101 115 115
Comment: The first command is "Insert". You have to insert painting number 114 at the next index after the 5th:
115 115 101 114 73 111 114 116 75
The "Switch" will switch number 116 with 73 and the collection should look like this:
115 115 101 114 116  111 114 73  75
After receiving the"Hide" command, you must remove 75. After that you receive "Reverse" and you have to reverse
the whole collection.  By receiving "Change" you have to exchange the value 73 with the value – 70. The next "Insert"command is invalid, because there is no 11th index in the collection.

Input:
77 120 115 101 101 97 78 88 112 111 108 101 111 110
Insert 5 32
Switch 97 78
Hide 88
Change 120 117
END
Оutput: 77 117 115 101 101 78 32 97 112 111 108 101 111 110



 */
