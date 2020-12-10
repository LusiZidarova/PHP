<?php 
$arr = explode(' ',readline());
$n = intval(readline());

$bestCount=0;
$elements = 0;
for ($i=0;$i<count($arr);$i++){
    
    for($j=$i+1;$j<count($arr);$j++){
       if($arr[$i]+$arr[$j] == $n){
           $sumEqual = true;
            echo $arr[$i] .' '.$arr[$j].PHP_EOL;
       
       } else{
           $sumEqual = false;
       }
   }
   
  
}

 

/*
8. Magic Sum
 * Write a program, which prints all unique pairs in an array of integers whose sum is equal to a given number.
Examples

Input 
1 7 6 2 19 23
8
Output
1 7
6 2
 * input
14 20 60 13 7 19 8
27
Output
14 13
20 7
19 8
 */