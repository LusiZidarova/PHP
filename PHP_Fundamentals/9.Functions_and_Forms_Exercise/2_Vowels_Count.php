<?php
//$s = readline();
$s = 'SofatUni';
 
echo countVowels($s);

function countVowels($s){
  $vowels = ['a','o','e','u','y','i'];
  $count = 0;
  for ($i = 0; $i < strlen($s); $i++) {
      if(in_array(mb_strtolower($s[$i]), $vowels)){
          $count++;
      }
     
  }
  
   return $count;
}



/*
2.Vowels Count
 * Write a function that receives a single string and prints the count of the vowels. Use appropriate name for the function.
Examples
Input	Output
SoftUni	3
Cats	1
JS	0
 */