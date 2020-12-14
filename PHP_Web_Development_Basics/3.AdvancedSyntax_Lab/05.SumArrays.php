<?php
$arr1 = explode(" ",readline());
$arr2 = explode(" ",readline());
$countArr1 = count($arr1);
$countArr2 = count($arr2);
if($countArr1 > $countArr2){
    for ($i=0; $i < $countArr1-$countArr2;$i++){
        array_push($arr2,$arr2[$i]);
    }
}else{
    for ($j=0; $j < $countArr2-$countArr1;$j++){
        array_push($arr1,$arr1[$j]);
    }
}
$arr3 = [];

for ($c=0; $c< count($arr1); $c++){
    $arr3[$c] = $arr1[$c] + $arr2[$c];
}

echo implode(" ",$arr3);
/*
 * 05.Sum Arrays - 100/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
Write a program that reads two arrays of integers and sums them. When the arrays are not of the same size, duplicate the smaller array
 a few times.
Examples
Input	Output	Comments
1 2 3 4
2 3 4 5
Output:
3 5 7 9
Comments:
1 2 3 4 +
2 3 4 5 =
3 5 7 9

Input
1 2 3 4 5
2 3
Output:
3 5 5 7 7
Comments:
 2 3 4 5 +
2 3 2 3 2 =
3 5 5 7 7

Input
5 4 3
2 3 1 4
Output:
7 7 4 9
Commnents
5 4 3 5 +
2 3 1 4 +
7 7 4 9
Hints
⦁	Assume the first array arr1 has len1 elements and the second arr2 has len2 elements.
⦁	The result array will have max(len1, len2) elements.
⦁	We sum array elements one by one (from the first to the last). To enable rotating (take the first element as next after the last),
we use the position % length indexing: arr1[i % len1] and arr2[i % len2].

 */