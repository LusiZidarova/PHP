<?php
$text=readline();
$occurrences = readline();
$splitted = preg_split("/[-,.!? ]/",$text,null,PREG_SPLIT_NO_EMPTY);
$count =0;
foreach($splitted as $word){
    if($word == $occurrences){
        $count++;
    }
}
echo $count;
print_r($splitted);
/*
5.Count String Occurrences - 100%
Write a program that receives a text and a string to search for.
Use spaces, commas, dots, question marks and exclamation marks as word delimiters. Print all the occurrences
of that word in the string
Examples
Input
This is a word and it also is a sentence.
is
Output
2
Input
How are you??   Good, thanks.
are
Output
1
Hint
Split the sentence into words and create a counter that stores how many times the searched word occurs
 */