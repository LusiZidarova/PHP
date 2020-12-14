<?php
$input = explode(" ",readline());
$len =1;
$bestLen = 0;
$bestElement = 0;
for($i=0; $i<count($input)-1; $i++) {
    $pos = $input[$i+1];
    if($pos == $input[$i]){
        $len++;
        if($bestLen < $len ){
            $bestLen = $len;
            $bestElement = $pos;
        }
    }else{
        $len =1;
        $pos = $input[$i+1];
    }
}
for($j=0; $j<$bestLen;$j++){
    echo $bestElement." ";
}

/*
 * 5. Max Sequence of Equal Elements-80/100 PHP-Web-Dev-Basics-Exercises Advanced Syntax and Operations - Exercise
Write a program that finds the longest sequence of equal elements in an array of integers. If several longest sequences exist, print the leftmost one.
Examples
Input	                    Output
2 1 1 2 3 3 2 2 2 1	        2 2 2
1 1 1 2 3 1 3 3	            1 1 1
4 4 4 4	                    4 4 4 4
0 1 1 5 2 2 6 3 3	        1 1

 */