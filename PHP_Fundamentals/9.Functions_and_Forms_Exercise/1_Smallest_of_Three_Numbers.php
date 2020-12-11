<?php
$n = 3;

echo smallest($n);

function smallest($n){
    
  $number = array();
   
  for ($i = 0; $i < $n; $i++) {
      array_push($number,readline());
    
  }  
  return min($number);

}


/*
 * 1.Smallest of Three Numbers
 * Write a function to print the smallest of three integer numbers. Use appropriate name for the function.
Examples
Input	Output
2
5
3	2
 * 
600
342
123	123
 * 
25
21
4	4
 */