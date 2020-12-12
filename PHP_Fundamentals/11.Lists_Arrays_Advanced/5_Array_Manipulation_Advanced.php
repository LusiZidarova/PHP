<?php
$arr = array_map(function ($el){
    return (int)$el;
},explode(' ',readline()));

$command = readline();

while ($command != 'end') {
    $commands = explode(' ',$command);
    $action = $commands[0];
    $numberCommand = $commands[1];
    $number = isset($commands[2])? $commands[2] : false;
    
    switch ($action) {
        case 'Contains':
            if(in_array($numberCommand, $arr)){
                echo 'Yes'. PHP_EOL;
            } else {
                echo 'No such number'.PHP_EOL;
            }
            break;
        case 'Print':
            for ($i = 0; $i < count($arr); $i++) {
                if($numberCommand == 'odd'){
                   if($arr[$i]%2 !==0){
                       echo $arr[$i].' ';
                   }
                } else if($numberCommand == 'even') {
                    if($arr[$i]%2 ==0){
                       echo $arr[$i].' ';
                   }
                }
            }
            echo PHP_EOL;
            break;
         case 'Get':
            if($numberCommand=='sum'){
                echo array_sum($arr).PHP_EOL;
            } 
            break;
         case 'Filter':
             foreach ($arr as $value) {
                 switch ($numberCommand) {
                     case '>':
                         if($value>$number){
                             echo $value.' ';
                         }
                         break;
                     case '<':
                         if($value<$number){
                             echo $value.' ';
                         }
                         break;
                     case '>=':
                         if($value>=$number){
                             echo $value.' ';
                         }
                         break;
                     case '<=':
                         if($value<=$number){
                             echo $value.' ';
                         }
                         break;    
               
                 }
                 
             }
            echo PHP_EOL; 
            break;
       
    }
    $command=readline();
}
echo implode(' ', $arr);
/*
 * 5. Array Manipulation Advanced
 * Now we need to extend the functionality of the previous task and we will implement more complicated array
commands. Again, read an array, and until you receive "end" read commands:
Contains {number} – check if the array contains the number. If yes print "Yes", otherwise print "No such number"
Print even – print all the numbers that are even separated by a space
Print odd – print all the numbers that are odd separated by a space
Get sum – print the sum of all the numbers
 * Filter ({condition} {number}) – print all the numbers that fulfill that condition. The condition will be either '<', '>',
">=", "<="
Example

Input 

2 13 43 876 342 23 543
Contains 100
Contains 543
Print even
Print odd
Get sum
Filter >= 43
Filter < 100
end
 * *************
Output
No such number
Yes
2 876 342
13 43 23 543
1842
43 876 342 543
2 13 43 23
 * 
 */