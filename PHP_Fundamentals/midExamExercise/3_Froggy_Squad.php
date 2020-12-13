<?php
$frogs = explode(' ', readline());
$input = readline();
while($input!== 'Print'){
    $args = explode(' ',$input);
    switch($args[0]){
        //Join {name}":
        //oA frog comes on the riverside and you need to add it in the end of your collection. Frog names will never repeat.
        case 'Join':
           $name = $args[1];
           if(!in_array($name,$frogs)){
               $frogs[] = $name;
           }
           break;
           //Jump {name} {index}"
        //oA frog jumps out of the water and joins the other frogs. You need to add it in your collection on the given index, if the index exists.
        case 'Jump':
            $name = $args[1];
            $index = $args[2];
            if(key_exists($index,$frogs)){
                array_splice($frogs,$index,0,$name);
            }
            break;
            //Dive {index}":
        //oThe frog on the given index has decided to jump into the water. You have to remove it from your collection, if the index exists.
        case 'Dive':
            $index = $args[1];
            if(key_exists($index,$frogs)){
                array_splice($frogs,$index,1);
            }
            //var_dump($frogs);
            break;
            //First/Last {count}":
        //oPrint the first/last {count} frogs separated by a single space. If the count requested is more than the frogs- just print them to the end.
        //"{frog} {frog} {frog}"
        case 'First':
            $count = $args[1];
            if($count > count($frogs)){
                 echo implode(' ',$frogs).PHP_EOL;
            }else {
                echo implode(' ',array_slice($frogs,0,$count)).PHP_EOL;
            }
            break;
        case 'Last':
            $count = $args[1];
            if($count > count($frogs)){
                echo implode(' ',$frogs).PHP_EOL;
            }else {
                echo implode(' ',array_slice($frogs,count($frogs)-$count,$count)).PHP_EOL;
            }
            break;
            //Print Normal/Reversed"
        //oPrint the names of the frogs in your collection in normal (in the order they have been added) or reversed order in the format described below, then stop the program:
        //"Frogs: {frog1} {frog2}… {frogn}"
        case 'Print':
            $print = $args[1];
                if($print == 'Normal'){
                    echo 'Frogs: '.implode(' ',$frogs);
                }
            if($print == 'Reversed'){
                echo 'Frogs: '.implode(' ',array_reverse($frogs));
            }
            exit();
            break;
    }
    $input = readline();
}

/*
 Froggy Squad - Programming Fundamentals Mid Exam - 30 June 2019 Group 2 - 100%
Froggy Squad

Create a program that helps you keep track of the frogs that are on the riverside. Because you are an extreme animal lover, you also name them. You will receive the names of the frogs that are already on the riverside on a single line, separated by a single space in the following format:
"{frog1} {frog2} {frog3}… {frogn}"
Then you will receive commands that describe their action. There are five possible commands:
"Join {name}":
oA frog comes on the riverside and you need to add it in the end of your collection. Frog names will never repeat.
"Jump {name} {index}"
oA frog jumps out of the water and joins the other frogs. You need to add it in your collection on the given index, if the index exists.
"Dive {index}":
oThe frog on the given index has decided to jump into the water. You have to remove it from your collection, if the index exists.
"First/Last {count}":
oPrint the first/last {count} frogs separated by a single space. If the count requested is more than the frogs- just print them to the end.
"{frog} {frog} {frog}"
"Print Normal/Reversed"
oPrint the names of the frogs in your collection in normal (in the order they have been added) or reversed order in the format described below, then stop the program:
"Frogs: {frog1} {frog2}… {frogn}"
Input
On the 1st line, you will receive the starting list with the names of the frogs separated by a single space.
On the next lines, you will receive commands in the format described above.
Output
Print the list after the manipulations upon the "Print" command in the format described above.

Examples
Input	Output
Blake Muggy Kishko
Join Kvachko
Dive 0
First 10
Print Reversed

Output:
	Muggy Kishko Kvachko
Frogs: Kvachko Kishko Muggy
Comments
First, we receive the "Join Kvachko" command, so we add the frog in the end of the collection.
Then, we receive the command "Dive  0", so we remove the frog on index 0.
Also, we receive the command "First 10", which is more than the frogs we have, so we print all frogs instead.
Lastly, we have to print the collection in reversed, so our output is: "Frogs: Kvachko Kishko Muggy".
Input
A B C D E F
Join G
Jump Q 3
Last 3
Dive 2
Print Normal

Output:
E F G
Frogs: A B Q D E F G

*/


