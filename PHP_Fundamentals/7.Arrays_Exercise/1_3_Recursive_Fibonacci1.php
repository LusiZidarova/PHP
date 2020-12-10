<?php 
$n= readline();
$array = [];
$sum = 0;
if($n >= 1 || $n<=50){
 for($i=1;$i<=$n;$i++){
     $array[0]=0;
   if($i==1){
      $array[$i] =  $array[$i+1] = 1;
   }
   else {
      $array[$i] = ($array[$i-2]+$array[$i-1]);
      $sum = $array[$i];
   }
 }
   echo $sum;
}else {
    echo 'Въведеното число трябва да е между 1 и 50';
    
}
/*
3. Recursive Fibonacci
The Fibonacci sequence is quite a famous sequence of numbers. Each member of the sequence is calculated from
the sum of the two previous elements. The first two elements are 1, 1. Therefore the sequence goes as 1, 1, 2, 3, 5,
8, 13, 21, 34…
The following sequence can be generated with an array, but that’s easy, so your task is to implement recursively.
So if the function GetFibonacci(n) returns the n’th Fibonacci number we can express it using
GetFibonacci(n) = GetFibonacci(n-1) + GetFibonacci(n-2).
However, this will never end and in a few seconds a StackOverflow Exception is thrown. In order for the recursion to
stop it has to have a “bottom”. The bottom of the recursion is GetFibonacci(2) should return 1 and GetFibonacci(1)
should return 1.
Input Format:
 On the only line in the input the user should enter the wanted Fibonacci number.
 Output Format:
 The output should be the n’th Fibonacci number counting from 1.
Constraints:
 1 ≤ N ≤ 50
Examples
 
Input 5 Output 5
Input 10 Output 55
Input 21 Output 10946
For the Nth Fibonacci number, we calculate the N-1th and the N-2th number, but for the calculation of N-1th
number we calculate the N-1-1th(N-2th) and the N-1-2th number, so we have a lot of repeated calculations.*/
