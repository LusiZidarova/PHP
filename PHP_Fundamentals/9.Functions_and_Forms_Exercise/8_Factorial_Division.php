<?php
$n1 = readline();
$n2 = readline();

echo factorialDivision($n1,$n2);

function factorialDivision($n1,$n2){
    $factorielN1 = 1;
    $factorielN2 = 1;
    
    for ($i = $n1; $i > 0; $i--) {
        $factorielN1 *= $i;
    }
    
    for ($i = $n2; $i > 0; $i--) {
        $factorielN2 *= $i;
    }
    $div = $factorielN1 /$factorielN2;
  
    $result = number_format($div,2,'.',',');
    
    return $result;
}

/*
8.Factorial Division
 * Read two integer numbers. Calculate factorial of each number. Divide the first result by
 * the second and print the division formatted to the second decimal point.
Examples
Input	Output		
5
2       60.00	
 *********************
6
2	360.00
 */