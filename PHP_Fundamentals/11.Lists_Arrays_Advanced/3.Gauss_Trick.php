<?php
$numbers = array_map('intval',explode(' ',readline()));
$count = count($numbers);

for($i=0;$i<count($numbers)/2;$i++){
    $numbers[$i] = $numbers[$i] + $numbers[$count-1-$i];
    array_splice($numbers,$count-1-$i,1);
}
echo implode(' ',$numbers);

/*3. Gauss&#39; Trick
Write a program that sum all numbers in an array in the following order:
first + last, first + 1 + last - 1, first + 2 + last - 2, … first + n, last - n.

Examples
Input           Output
1 2 3 4 5       6 6 3
1 2 3 4         5 5
*/