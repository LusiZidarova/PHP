<?php
$name= explode(' ',readline());
$quantity= explode(' ', readline());
$price= explode(' ', readline());

$command = readline();

while($command !== 'done'){
    
    for ($i = 0; $i < count($name); $i++) {
        if($command == $name[$i]){
            echo $name[$i] .' costs: '.floatval($price[$i]).'; Available quantity: '. intval($quantity[$i]).PHP_EOL;
        }
    }
    $command = readline();
}




/*
6. Inventory Matcher
 You will be given three arrays on different lines. The first one will contain strings, which will represent the name of
products. Second one will contain long integer numbers (float) and will represent the quantities of the products.
The third one will contain float and represents the price of the product.

© SoftUni – https://softuni.org. Copyrighted document. Unauthorized copy, reproduction or use is not permitted.
Follow us: Page 1 of 1
After which, you will be given names of products on new lines, until you receive the command “done”. For each
given product name print:
{name of the product} costs: {price}; Available quantity: {quantity}
The names, prices and quantities of the products are in the same indices in the 3 arrays.
 Input
 On the first line, you will receive an array of strings, which represent the names of the products.
 On the second line, you will receive an array of long integer numbers (float), which represent the
quantities of the products.
 On the third line, you will receive an array of floats, which represent the prices of the products.
Constraints
 The three arrays will always have the same length.
 You will always receive existing products.
Examples

Input 

Bread Juice Fruits Lemons
10 50 20 30
2.34 1.23 3.42 1.50
Bread
Juice
done
 * 
Output
Bread costs: 2.34; Available quantity: 10
Juice costs: 1.23; Available quantity: 50

Input
Oranges Apples Nuts
1500 5000000 2000000000
2.3412 1.23 3.4250
Nuts
done
 * 
Output
Nuts costs: 3.4250; Available quantity: 2000000000

Hints
The simplest way to find the index of the element (without external libraries) will be to loop through the array
 */