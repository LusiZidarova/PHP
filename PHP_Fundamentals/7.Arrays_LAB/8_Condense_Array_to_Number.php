<?php
$array = explode(' ',readline());
while(count($array)>1){
   $arrNew=[];
    for($i=0;$i<count($array)-1;$i++){
       $arrNew[$i]= $array[$i] + $array[$i+1];
    }
      $array = $arrNew;
}
echo $array[0];
 

/*
8. Condense Array to Number
 * Write a program to read an array of integers and condense them by summing adjacent couples of elements until a
single integer is obtained. For example, if we have 3 elements {2, 10, 3}, we sum the first two and the second two
elements and obtain {2+10, 10+3} = {12, 13}, then we sum again all adjacent elements and obtain {12+13} = {25}.
 * Examples
  
Input 2 10 3 
 * Output 25 
 * Comments 2 10 3  2+10 10+3  12 13  12 + 13  25
 * 
Input 5 0 4 1 2 
 * Output 35 
 * Comments 5 0 4 1 2  5+0 0+4 4+1 1+2  5 4 5 3  5+4 4+5 5+3  9 9 8
 9+9 9+8  18 17  18+17  35
 * 
Input 1  
 * Output 1 
 * Comments 1 is already condensed to number
 * 
 */