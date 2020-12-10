<?php 
$arr = explode(' ',readline());
$n = intval(readline());

$countArray = count($arr);
$k = $n%$countArray;

if($k>0){
    $arr1 = array_slice($arr, $k);
    $arr2 = array_slice($arr, 0, $k);
    $arrNew  = array_merge($arr1,$arr2);
}
foreach($arrNew as $value){
	echo $value.' ';
}
        

/*
4. Array Rotation
Write a program that receives an array and number of rotations you have to perform (first element goes at the end)
Print the resulting array.

 * Examples
Input Output
51 47 32 61 21
2
output
32 61 21 51 47
 * 
Input
32 21 61 1
4
output
32 21 61 1
input
2 4 15 31
5
output
4 15 31 2 * 
 * 
 */