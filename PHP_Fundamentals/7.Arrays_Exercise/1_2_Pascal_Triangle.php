<?php 
$n= readline();

$array[] = '';

for($i=0;$i<$n;$i++){
   
    for($j=0;$j<=$i;$j++){
        if($j==0){
            $array[$i][$j]=1;
            echo $array[$i][$j].' ';
        }
        elseif ($i == $j) {
            $array[$i][$j]=1;
            echo $array[$i][$j].' ';
        } else {
            $array[$i][$j] = $array[$i-1][$j-1] +$array[$i-1][$j] ;
            echo $array[$i][$j].' ';
        }
    }
  echo PHP_EOL;
}

/*
2. Pascal Triangle
 * The triangle may be constructed in the following manner: In row 0 (the topmost row), there is a unique nonzero
entry 1. Each entry of each subsequent row is constructed by adding the number above and to the left with the
number above and to the right, treating blank entries as 0. For example, the initial number in the first (or any other)
row is 1 (the sum of 0 and 1), whereas the numbers 1 and 3 in the third row are added to produce the number 4 in
the fourth row.
If you want more info about it: https://en.wikipedia.org/wiki/Pascal&#39;s_triangle
Print each row elements separated with whitespace.
 * Examples
Input 
4
Output  
1
1 1
1 2 1
1 3 3 1
 * 
input
13 
 * output
1
1 1
1 2 1
1 3 3 1
1 4 6 4 1
1 5 10 10 5 1
1 6 15 20 15 6 1
1 7 21 35 35 21 7 1
1 8 28 56 70 56 28 8 1
1 9 36 84 126 126 84 36 9 1
1 10 45 120 210 252 210 120 45 10 1
1 11 55 165 330 462 462 330 165 55 11 1
1 12 66 220 495 792 924 792 495 220 66 12 1 
 */