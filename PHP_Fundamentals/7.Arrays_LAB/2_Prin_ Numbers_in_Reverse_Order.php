<?php
$num = intval(readline());
$arr = [];

for($i=0;$i<$num;$i++){
    $arr[$i] = intval(readline());
}
$arr = array_reverse($arr);
echo implode(' ', $arr);

/*2. Print Numbers in Reverse Order
Read n numbers and print them in reverse order.
Examples
Input Output
3
10
20
30
Output
30 20 10

Input
3
30
20
10
Output
10 20 30
Input
1
10
Output
10
*/