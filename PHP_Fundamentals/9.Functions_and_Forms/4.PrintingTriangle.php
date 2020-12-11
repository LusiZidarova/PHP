<?php
$n = intval(readline());

for($i=1;$i<$n;$i++){
    printNumbers(1,$i);
}
printNumbers(1,$n);

for($i=$n-1;$i>=1;$i--){
    printNumbers(1,$i);
}

 function printNumbers($start,$end){
   for ($i=$start;$i<=$end;$i++) {
       echo $i.' ';
   }
   echo PHP_EOL;
}

/*
4. Printing Triangle
Create a function for printing triangles as shown below:
Examples


Input Output
3

Output
1
1 2
1 2 3
1 2
1
Input
4
Output
1
1 2
1 2 3
1 2 3 4
1 2 3
1 2
1
Hints
1. After you read the input
2. Start by creating a function for printing a single line from a given start to a given end. Choose a meaningful
name for it, describing its purpose:

    3. Think how you can use it to solve the problem
4. After you spent some time thinking, you should have come to the conclusion that you will need two loops
5. In the first loop you can print the first half of the triangle without the middle line:

6. Next, print the middle line:

7. Lastly, print the rest of the triangle:
*/