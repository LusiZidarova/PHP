<?php
$number= intval(readline());
for ($i = 2; $i <= $number; $i++) {
    
$numberValid = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $numberValid  = false;
            break;
        }
    }
    if ($numberValid ){
        printf("%d -> true" . PHP_EOL, $i);
    }else{
        printf("%d -> false" . PHP_EOL, $i);
    }
}
/*
4. Refactoring: Prime Checker

$number= intval(readline());
for ($i = 2; $i <= $___Do___; $i++) {
$takovalie = true;
for ($j = 2; $j < $i; $j++) {
if ($i % $j == 0) {
$takovalie = false;
break;
}
}
if ($takovalie)
printf("%d -&gt; true" . PHP_EOL, $i);
else
printf("%d -&gt; false" . PHP_EOL, $i);
}


 */

