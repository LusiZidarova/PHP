<?php 
$arr = explode(',', readline());
$comand = readline();

while ($comand === 'end') {
    $comand = readline();
    
    if($comand == 'exchange{index}'){
       // $command 
    }
}



/*
11.*Array Manipulator
 * Trifon has finally become a junior developer and has received his first task. It’s about manipulating an array of integers. He is not quite happy about it, since he hates manipulating arrays. They are going to pay him a lot of money, though, and he is willing to give somebody half of it if to help him do his job. You, on the other hand, love arrays (and money) so you decide to try your luck.
The array may be manipulated by one of the following commands
 * 
exchange {index} – splits the array after the given index, and exchanges the places of the two resulting sub-arrays. E.g. [1, 2, 3, 4, 5] -> exchange 2 -> result: [4, 5, 1, 2, 3]
oIf the index is outside the boundaries of the array, print “Invalid index”
 * 
max even/odd– returns the INDEX of the max even/odd element -> [1, 4, 8, 2, 3] -> max odd -> print 4
min even/odd – returns the INDEX of the min even/odd element -> [1, 4, 8, 2, 3] -> min even > print 3
oIf there are two or more equal min/max elements, return the index of the rightmost one
oIf a min/max even/odd element cannot be found, print "No matches"
 * 
first {count} even/odd– returns the first {count} elements -> [1, 8, 2, 3] -> first 2 even -> print [8, 2]
last {count} even/odd – returns the last {count} elements -> [1, 8, 2, 3] -> last 2 odd -> print [1, 3]
oIf the count is greater than the array length, print “Invalid count”
oIf there are not enough elements to satisfy the count, print as many as you can. If there are zero even/odd elements, print an empty array "[]"
 * 
end – stop taking input and print the final state of the array
 Input
The input data should be read from the console.
On the first line, the initial array is received as a line of integers, separated by a single space
On the next lines, until the command “end” is received, you will receive the array manipulation commands
The input data will always be valid and in the format described. There is no need to check it explicitly.
Output
The output should be printed on the console.
On a separate line, print the output of the corresponding command
On the last line, print the final array in square brackets with its elements separated by a comma and a space 
See the examples below to get a better understanding of your task
Constraints
The number of input lines will be in the range [2 … 50].
The array elements will be integers in the range [0 … 1000].
The number of elements will be in the range [1 .. 50]
The split index will be an integer in the range [-231 … 231 – 1]
first/last count will be an integer in the range [1 … 231 – 1]
There will not be redundant white space anywhere in the input
Allowed working time for your program: 0.1 seconds. Allowed memory: 16 MB.
Examples
Input	                 Output
1 3 5 7 9
exchange 1              Invalid index
exchange 5              [3, 5, 7, 9, 1]
exchange 3             
end	
***************************************************
 1 1000 10 100 1000     
max even                4
max odd                 0
end                     [1, 1000, 10, 100, 1000]
0

1 113 11 1123
min odd                 0
min even                No matches
end                     [1, 113, 11, 1123]

****************************************
1 8 2 3 10 5
first 0 odd           []  
first 4 even          [8, 2, 10]
first 7 odd           Invalid count
first 2 odd           [1, 3]
end                   [1, 8, 2, 3, 10, 5]	
************************************************

 * 1 8 2 3 10 5
last 3 even             [8, 2, 10]
last 1 odd              [5]
last 7 odd              Invalid count
last 4 odd              [1, 3, 5]
end                     [1, 8, 2, 3, 10, 5]

******************************************************
6 10 7 4 9 14 19 2 22 45
exchange 4              
max even               3
min even                2
first 3 odd             [19, 45, 7]
exchange 22             Invalid index
exchange 6              0
min odd                 5
min even                [4, 14, 2, 22, 6, 10]
last 7 even             [7, 4, 9, 14, 19, 2, 22, 45, 6, 10]
end	



 */