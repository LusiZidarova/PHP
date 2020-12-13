<?php
$colection = explode(' ',readline());
$input = readline();
while ($input != 'Stop') {
    $comands = explode(' ', $input);
    
    switch ($comands[0]) { 
        case 'Delete':
            $index = $comands[1]+1;
            if($index<count($colection)&&$index>=0){
                array_splice($colection, $index, 1);
            }
            break;
        case 'Swap':
            if(in_array($comands[1], $colection) && in_array($comands[2], $colection)){
               $index1 = array_search($comands[1], $colection);
               $index2 = array_search($comands[2], $colection);
            
                array_splice($colection, $index1, 1, $comands[2]);
                array_splice($colection, $index2, 1, $comands[1]);
            }
            break;
        case 'Put':
            $index = $comands[2];
            
            if($index >0 && $index <= count($colection)+1){
                
               array_splice($colection, $index-1, 0,$comands[1]);
            }
            break;   
        case 'Sort':
            rsort($colection);
            break;
         case 'Replace':
             $index = array_search($comands[2],$colection);
                if(in_array($comands[2],$colection)){
                 array_splice($colection, $index, 1,$comands[1]);
            }
            break;
    }
    $input = 'Stop';
}
echo implode(' ',$colection);

/*
The Final Quest
After walking through fire, the group has reached the final step of the quest. They have received a list with instructions that will help them resolve the last riddle that will lead them to the truth about the Hunting Games.
Create a program that follows given instructions. You will receive a collection of words on a single line, split by a single space. They are not what they are supposed to be, so you have to follow the instructions in order to find the real message. You will be receiving commands. Here are the possible ones:
-Delete {index} – removes the word after the given index if it is valid.
-Swap {word1} {word2} – find the given words in the collections if they exist and swap their places.
-Put {word} {index} – add a word at the previous place {index} before the 
given one, if it is valid. Note: putting at the last index simply appends the word to the end of the list.
-Sort – you must sort the words in descending order.
-Replace {word1} {word2} – find the second word {word2} in the collection (if it exists) and replace it with the first word – {word1}.
Follow them until you receive the "Stop" command. After you have successfully followed the instructions, you must print the words on a single line, split by a space.
Input / Constraints
On the 1st line, you are going to receive the collection of words, split by a single space – strings
On the next lines, you are going to receive commands, until you receive the "Stop" command
Output
Print the words you have gathered on a single line, split by a single space
Examples
Input	Output
Congratulations! You last also through the have challenge!
Swap have last
Replace made have
Delete 2
Put it 4
Stop
Output
Congratulations! You made it through the last challenge!
Comments
First, we receive the command “Swap”, so we change the positions of the words have and last. The text at this point should look like this:
Congratulations! You have also through the last challenge!
After that, we receive “Replace” and we have to replace the second word – “have” with the first – “made”. Afterwards we have to delete the word, which is after the second index. And finally, we have to put a word on the previous position before 4.
Input
This the my quest! final
Put is 2
Swap final quest!
Delete 2
Stop
Output
This is the final quest!

