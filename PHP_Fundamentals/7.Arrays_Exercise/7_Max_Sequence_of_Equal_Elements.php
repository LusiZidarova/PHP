<?php 
$arr = explode(' ',readline());
$bestCount=0;
$bestElement = 0;

for ($i=0;$i<count($arr);$i++){
    $count = 1;
    for($j=$i+1;$j<count($arr);$j++){
       if($arr[$i]===$arr[$j]){
           $count++;
       } else{
           break;
       }
   }
   if($count > $bestCount){
       $bestCount = $count;
       $bestElement = $arr[$i];
   }
}
for ($i= 0; $i< $bestCount; $i++) {
    echo $bestElement.' ';
}

/*
7. Max Sequence of Equal Elements
 * Write a program that finds the longest sequence of equal elements in an array of integers. If several longest
sequences exist, print the leftmost one.
Examples

Input 
2 1 1 2 3 3 2 2 2 1 
 * Output: 2 2 2
 * Input 
1 1 1 2 3 1 3 3 
 * Output:1 1 1
 * Input 
4 4 4 4 
 * Output 4 4 4 4
 * Input 
0 1 1 5 2 2 6 3 3
 * Output 1 1
 */