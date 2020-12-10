<?php
$length = $width = $height = 0;
echo "Length: ";
$length = floatval(readline());
echo "Width: ";
$width = floatval(readline());
echo "Height: ";
$height = floatval(readline());
$v = ($length * $width * $height) / 3;
echo sprintf("Pyramid Volume: %.2f",$v) . PHP_EOL;

/*
 * 
 * 8. Refactor Volume of Pyramid
You are given a working code that finds the volume of a pyramid. However, you should consider that the
variables exceed their optimum span and have improper naming. Also, search for variables that have
multiple purpose.
 * 
<?php
$length = $width = $height = 0;
echo "Length: ";
$length = floatval(readline());
echo "Width: ";
$width = floatval(readline());
echo "Height: ";
$height = floatval(readline());
$v = ($length * $width * $height) / 3;
echo sprintf("Pyramid Volume: %.2f",$v) . PHP_EOL;
 * Hints
 Reduce the span of the variables by declaring them in the moment they receive a value, not before
 Rename your variables to represent their real purpose (example: &quot;dul&quot; should become length, etc.)
 Search for variables that have multiple purpose. If you find any, introduce a new variable.
 */
