<?php
$num = explode(' ',readline());
$sum =0;

for($i=0;$i<count($num)-1;$i++){
    if ($num[$i]%2==0){
        $sum+=$num[$i];
    }
}
echo $sum;


/*
5.Sum Even Numbers
 Read an array from the console and sum only even numbers.
 * Examples
Input           Output
1 2 3 4 5 6     12
3 5 7 9         0
2 4 6 8 10      30
 */