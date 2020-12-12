<?php
$n = intval(readline());
matrix($n);

function matrix($n){
    
    for ($row = 0; $row < $n; $row++) {
        
        for ($coll = 0; $coll < $n; $coll++) {
            echo $n.' ';
        }
        echo PHP_EOL;
    }
    echo PHP_EOL;
}


/*
7.NxN  Matrix
 3	    3 3 3
        3 3 3
        3 3 3
 *************************
7	    7 7 7 7 7 7 7
        7 7 7 7 7 7 7
        7 7 7 7 7 7 7
        7 7 7 7 7 7 7
        7 7 7 7 7 7 7
        7 7 7 7 7 7 7
        7 7 7 7 7 7 7
 *****************************
2	    2 2
        2 2
 */