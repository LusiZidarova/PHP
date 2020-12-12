<?php
$n = readline();
$command = readline();
$guests = [];

for ($i = 0; $i < $n; $i++) {
    $commands = explode(' ',$command);
    $name = $commands[0];
    $check = $commands[2];

    if($check === 'going!'){
        if(in_array($name,$guests)){
            echo $name.' is already in the list!'.PHP_EOL;
        } else {
            $guests[]=$name;
        }
    }elseif ($check === 'not') {
        $index = array_search($name, $guests);
         if($index== true){
             array_splice($guests, $index, 1); 
        } else {
         echo $name.' is not in the list!'.PHP_EOL;
        }
    }
 $command = readline();
}
echo implode(PHP_EOL, $guests);

/*
3.House Party
 Write a program that keeps track of a guests that are going to a house party. On the first input line you are going to receive how many commands you are going to have. On the next lines you are going to receive some of the following inputs:
"{name} is going!"
"{name} is not going!"
If you receive the first type of input, you have to add the person if he/she is not in the list (If he/she is in the list print on the console: "{name} is already in the list!"). If you receive the second type of input, you have to remove the person if he/she is in the list (if not print: "{name} is not in the list!"). At the end print each guest on a new line.

 * Examples
Input	
4
Allie is going!
George is going!
John is not going!
George is not going!
 * Output
	John is not in the list!
Allie
 * 
Input
5
Tom is going!
Annie is going!
Tom is going!
Garry is going!
Jerry is going!
	Tom is already in the list!
 * Output
Tom
Annie
Garry
Jerry 

 */
