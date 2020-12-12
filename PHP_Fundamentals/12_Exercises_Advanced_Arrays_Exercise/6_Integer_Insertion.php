<?php
$arr =explode(' ', readline());

$input = readline();

while ($input != 'end') {
    $leng = strlen($input);

    $index = $input[0];
     array_splice($arr, $index, 0, $input);
    
    $input = readline();
}
echo implode(' ', $arr);
    
/*
6.Integer Insertion 100/100
 * You will receive an array of integers on the same line (separated by one space). On the next lines,
     *  you will start receiving an array of strings, until you receive the string "end". Your task is
     * to insert each string (converted to integer) at a specific index in the array. The index is determined
     *  by the first digit of the number.
Example: 514  first digit – 5  insert 514 at the 5th index of the array.
After you insert all the elements, print the array, separated by single spaces.
Constrains
The input will always be valid and you don't need to explicitly check if you're inserting an element into a valid index.
Examples
Input	Output
1 2 3 4 5 6 7 8 9
25
716
2772
1982
8534
2
end	
 * Output: 1 1982 2 2 2772 25 3 4 5 8534 6 716 7 8 9

    Input*
3 12 66 243 8766
12
33
56
end	
 * Output
 * 3 12 12 33 66 56 243 8766
 * 
 * Input
9 9 9 9 9 9 9 9 9 9
9
9
9
9
9
end	
 * Output: 99 9 9 9 9 9 9 9 9 9 9 9 9 9

 */

