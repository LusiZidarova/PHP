<?php
$n = intval(readline());
$total = 0;
$series = 0;
$special = false;

for ($length = 1; $length <= $n; $length++) {
    $series = $length;
        while ($length > 0) {
           $total += $length%10;
           $length = $length/10;
        }
    $special = ($total==5)||($total==7)||($total==11);
    $result = $special ? "True":"False";
    echo sprintf("%d -> %s",$series,$result).PHP_EOL;
    $total = 0;
    $length= $series;
}

/*
 * 9. Refactor Special Numbers
You are given a working code that is a solution to Problem 5. Special Numbers. However, the variables are
improperly named, declared before they are needed and some of them are used for multiple things.
Without using your previous solution, modify the code so that it is easy to read and understand.
 * 
<?php
$n = intval(readline());
$total = 0;
$series = 0;
$special = false;

for ($length = 1; $length <= $n; $length++) {
    $series = $length;
        while ($length > 0) {
           $total += $length%10;
           $length = $length/10;
        }
    $special = ($total==5)||($total==7)||($total==11);
    $result = $special ? "True":"False";
    echo sprintf("%d -> %s",$series,$result).PHP_EOL;
    $total = 0;
    $length= $series;
}
 * 
 * Hints
 Reduce the span of the variables by declaring them in the moment they receive a value, not before
 Rename your variables to represent their real purpose (example: &quot;dul&quot; should become length, etc.)
 Search for variables that have multiple purpose. If you find any, introduce a new variable
 */
