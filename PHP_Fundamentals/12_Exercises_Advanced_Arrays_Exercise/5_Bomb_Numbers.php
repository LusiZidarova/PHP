<?php

$arr = explode(' ', readline());
$comand = explode(' ', readline());
$number = $comand[0];
$power = $comand[1];
$toRemove= 2*$power+1;
$index= array_search($number, $arr);
        
$toRemoveFromIndex=$index-$power;
while(in_array($number, $arr)){
    array_splice($arr, $toRemoveFromIndex, $toRemove);
}
echo array_sum($arr);


/*5. Bomb Numbers
Write a program that reads sequence of numbers and special bomb number with a certain power. Your task is to
detonate every occurrence of the special bomb number and according to its power his neighbors from left and
right. Detonations are performed from left to right and all detonated numbers disappear. Finally print the sum of
the remaining elements in the sequence.
Examples
Input
1 2 2 4 2 2 2 9
4 2
Output
12
Coments
Special number is 4 with power 2. After detontaion we left with the
sequence [1, 2, 9] with sum 12.

Input
1 4 4 2 8 9 1
9 3
Output
5
Coments
Special number is 9 with power 3. After detontaion we left with the
sequence [1, 4] with sum 5. Since the 9 has only 1 neighbour from the right
we remove just it (one number instead of 3).
Input
1 7 7 1 2 3
7 1
Output
6
Coments
Detonations are performed from left to right. We could not detonate the
second occurance of 7 because its already destroyed by the first occurance.
The numbers [1, 2, 3] survive. Their sum is 6.
Input
1 1 2 1 1 1 2 1 1 1
2 1
Output
4
Coments
The red and yellow numbers disappear in two sequential detonations. The
result is the sequence [1, 1, 1, 1]. Sum = 4.
*/