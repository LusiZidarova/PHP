<?php
//$numbers = floatval(readline());
//$numbers = '0.9 1.5 2.4 2.5 3.14';
$numbers = '-5.01 -1.599 -2.5 -1.50 0';

$numbers = explode(' ',$numbers);

for($i=0;$i<count($numbers);$i++){
     echo number_format($numbers[$i],2).' => '.round($numbers[$i]).'<br>';
}
/*
 * 3. Rounding Numbers
Read an array of real numbers (space separated), round them in &quot;away from 0&quot; style and print the output as in the
example: &quot;0.90 =&gt; 1&quot;. &quot;0.90&quot; is rounded to the second decimal place.

Examples

Input
0.9 1.5 2.4 2.5 3.14
Output
0.90 => 1
1.50 => 2
2.40 => 2
2.50 => 3
3.14 => 3

Input
-5.01 -1.599 -2.5 -1.50 0
Output
-5.01 => -5
-1.60 => -2
-2.50 => -3
-1.50 => -2
0.00 => 0

Hints
To round &quot;away from 0&quot; use round() method. By default the method&#39;s rounding mode is away from 0.
 */