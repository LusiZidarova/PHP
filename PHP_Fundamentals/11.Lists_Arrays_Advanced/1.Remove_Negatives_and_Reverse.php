<?php
$input = array_map('intval',explode(' ',readline()));

for($i=0;$i<count($input);$i++){
    if($input[$i] < 0){
        array_splice($input,$i,1);
        $i--;
    }
}
if(count($input) == 0){
    echo 'empty';
}else{
    echo implode(' ',array_reverse($input));

}

/*1. Remove Negatives and Reverse
Read an array of integers, remove all negative numbers from it and print the remaining elements in reversed order.
In case of no elements left in the array, print &quot;empty&quot;.
Examples
Input               Output
10 -5 7 9 -33 50    50 9 7 10
7 -2 -10 1          1 7
-1 -2 -3            empty
*/