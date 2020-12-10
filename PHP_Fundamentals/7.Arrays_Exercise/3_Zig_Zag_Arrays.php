<?php 
$n = intval(readline());

$zig = [];
$zag = [];

for ($i=0;$i<$n;$i++){
    $arr = explode(' ',readline());
   
    if($i%2==0){
        $zig[] = $arr[0];
        $zag[] = $arr[1];
    } else {
         
        $zag[] = $arr[0];
        $zig[] = $arr[1];
    }
    
}

echo implode(' ',$zig).PHP_EOL;
echo implode(' ',$zag);



/*
 *3. Zig-Zag Arrays
Write a program which creates 2 arrays. You will be given an integer n. On the next n lines you get 2 integers. Form
2 arrays as shown below.
 
 * Examples
Input Output
4
1 5
9 10
31 81
41 20

output
1 10 31 20
5 9 81 41

2
80 23
31 19
 * 
output
80 19
23 31
 * 
 */