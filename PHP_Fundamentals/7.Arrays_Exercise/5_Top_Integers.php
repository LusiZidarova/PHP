<?php 
$arr = explode(' ',readline());

$maxInteger=[];

for($i=0;$i<count($arr);$i++){
    $top = true;
    
   for($j=$i+1;$j<count($arr);$j++){
       
       if($arr[$i]<=$arr[$j]){
           $top = false;
          break;
       }
   }
 if($top){
     $maxInteger[] = $arr[$i];
 }
}
echo implode(' ',$maxInteger);
/*
5. Top Integers
 * Write a program to find all the top integers in an array. A top integer is an integer which is bigger than all the
elements to its right.
 * Examples

Input
1 4 3 2 
 * output 4 3 2
 * input
14 24 3 19 15 17 17 
 * output
 * 24 19 17
 * input
27 19 42 2 13 45 48 
 * output
 * 48
 * 
 */