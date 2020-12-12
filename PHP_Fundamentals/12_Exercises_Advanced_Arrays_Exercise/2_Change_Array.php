<?php
$arr = array_map('intval',explode(' ',readline()));

$input = readline();
while(true){
    $commands = explode(' ',$input);
   switch($commands[0]){
       case 'Delete' :
           $number = $commands[1];
           for ($i = count($arr)-1; $i >= 0; $i--) {
               if($arr[$i] == $number ){
                   array_splice($arr, $i, 1);
               }
           }
           break;
       case 'Insert' :
           $number = $commands[1];
           $position = $commands[2];

           if($position>=0 && $position<=count($arr)){
               array_splice($arr, $position, 0,$number);
           }
           break;
       case 'Even' :
           for ($i = 0; $i < count($arr); $i++) {
               if ($arr[$i] % 2 == 0) {
                   echo $arr[$i] . ' ';
               }
           }
                   break;
       case 'Odd' :
           for ($i = 0; $i < count($arr); $i++) {
               if ($arr[$i] % 2 != 0) {
                   echo $arr[$i] . ' ';
               }
           }
           break;
   }
    $input = readline();
}

//echo implode(' ',$arr);
/*
2.Change Array
 * Write a program, which reads an array of integers from the console and receives commands, which manipulate the array. Your program may receive the following commands: 
Delete {element} – delete all elements in the array, which are equal to the given element
Insert {element} {position} – insert element and the given position
You should stop the program when you receive the command Odd or Even. If you receive Odd  print all odd numbers in the array separated with single whitespace, otherwise print the even numbers.
 Examples
Input	Output
1 2 3 4 5 5 5 6
Delete 5
Insert 10 1
Delete 5
Odd	
 * output: 1 3
 * 
 * Input
20 12 4 319 21 31234 2 41 23 4
Insert 50 2
Insert 50 5
Delete 4
Even	
 * Output: 20 12 50 50 31234 2
 */
