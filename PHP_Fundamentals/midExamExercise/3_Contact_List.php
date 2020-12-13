<?php
$contacts = explode(' ',readline());

$input = readline();

while($input !== ''){
    $args = explode(' ',$input);
    $command = $args[0];

    switch ($command){
        case 'Add':
            $contact = $args[1];
            $index = $args[2];

            if(!in_array($contact,$contacts)){
                $contacts[]= $contact;
            }else if(key_exists($index,$contacts)){
                array_splice($contacts,$index,0, $contact);
            }
            break;
        case 'Remove':
            $index = $args[1];
            if(key_exists($index,$contacts)){
                array_splice($contacts,$index,1);
            }
            break;
        case 'Export':
            $startIndex= $args[1];
            $count= $args[2];
            $countArray = count($contacts);

            if($count > ($countArray-$startIndex)){
                for ($i=$startIndex;$i<$countArray;$i++){
                    echo $contacts[$i]. ' ';
                }
                echo PHP_EOL;
            }else {
                for ($i=$startIndex;$i<$count;$i++){
                    echo $contacts[$i]. ' ';
                }
                echo PHP_EOL;
            }
            break;
        case 'Print':
            $normalRev = $args[1];
            if($normalRev == 'Normal'){
                echo 'Contacts: '.implode(' ',$contacts);
            }
            elseif($normalRev == 'Reversed'){
                echo 'Contacts: '.implode(' ',array_reverse($contacts));
            }
            exit;
            break;
    }
    $input = readline();
}


/*
Contact List -Programming Fundamentals Mid Exam - 30 June 2019 Group 1 - Judgee 90 %
Create a program that helps you keep track of the contacts that you have. You will receive the list of contacts you already have on a single line, separated by a single space in the following format:
"{contact1} {contact2} {contact3}… {contactn}"
Then you will receive commands that you need to execute over your list. There are four possible commands:
"Add {contact} {index}":
oIf {contact} isn’t already contained – add it in the end of the collection.
oIf {contact} is already contained – add it on the given index, if the index exists.
"Remove {index}"
oRemove the contact on the given index, if the index exists.
"Export {startIndex} {count}":
oPrint the next {count} contacts starting from the given {startIndex} (including), separated by a single space. If the count requested is more than the contacts- just print them to the end.
"{contact} {contact} {contact}"
"Print Normal/Reversed"
oPrint the contact list in normal (in the order they have been added) or reversed order and then stop the program:
"Contacts: {contact1} {contact2}… {contactn}"
Input
On the 1st line, you will receive the starting list with the names of the contacts separated by a single space.
On the next lines, you will receive commands in the format described above.
Output
Print the needed output upon the "Export" command.
Print the list after the manipulations upon the "Print" command in the format described above.


Examples
Input	Output
Alisson Bellamy Candace Tristan
Remove 3
Add Bellamy 2
Print Normal

Output:
	Contacts: Alisson Bellamy Bellamy Candace
Comments
First, we receive the “Remove 3” command, so we remove the contact at index 3 (“Tristan”).
Then, we receive the command “Add Bellamy 2” but we already have “Bellamy” in our collection, so we add it on index 2.
Lastly, we have to print the collection in normal order, so our output is: “Contacts: Alisson Bellamy Bellamy Candace”

Input
Zayn Katy Ariana Avril Nick Mikolas
Remove 3
Add Jacob 0
Export 0 3
Export 3 8
Print Reversed	Zayn Katy Ariana
Nick Mikolas Jacob
Output:
Contacts: Jacob Mikolas Nick Ariana Katy Zayn


 */
