<?php

$arr1 = explode(' ', readline());
$arr2 = explode(' ',readline());

$newArr = [];

$countArr1 = count($arr1);
$countArr2 = count($arr2);

if($countArr1>$countArr2){
    $border= array_splice($arr1, $countArr1-2,2);
}else if($countArr1<$countArr2){
    $border= array_splice($arr2,0,2);
}
if($border[0]>$border[1]){
    $a = $border[0];
    $border[0] = $border[1];
    $border[1] = $a;
}
$arr2Rev= array_reverse($arr2);

for ($i = 0; $i < count($arr1); $i++) {
         $newArr[] = $arr1[$i];
        $newArr[] = $arr2Rev[$i];
}

$endArr = [];
for ($i = 0; $i < count($newArr); $i++) {
    if($newArr[$i]>$border[0] && $newArr[$i]<$border[1] ){
       $endArr[] = $newArr[$i];
    }
}
echo implode(' ',$endArr);

/*
Mixed Up Lists
 
Write a program that mixes up two lists by some rules. You will receive two lines of input, each one being a list of
numbers. The rules for mixing are:
 Start from the beginning of the first list and from the ending of the second
 Add element from the first and element from the second
 At the end there will always be a list in which there are 2 elements remaining
 These elements will be the range of the elements you need to print
 Loop through the result list and take only the elements that fulfill the condition
 Print the elements ordered in ascending order and separated by a space
Example
Input Output

1 5 23 64 2 3 34 54 12
43 23 12 31 54 51 92

23 23 31 34 43 51
Comment

After looping through the two of the arrays we get: 1 92 523 51  54 64 31 2 12 3 23 34 43
The constrains are 54 and 12 (so we take only the numbers between them): 51 23 31 23 34 43
We print the result sorted

 */
