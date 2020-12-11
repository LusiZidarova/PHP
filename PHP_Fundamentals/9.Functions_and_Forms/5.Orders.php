<?php
$products = ['coffee' =>1.50,
             'water' =>1.00,
             'coke' =>1.40,
             'snacks' => 2.00
    ];

$product = strtolower(readline());
$qty = intval(readline());
totalPrice($product,$qty,$products);
function totalPrice($product,$qty,array $products){
    if(key_exists($product,$products)){
        echo number_format($qty*$products[$product],2);
    }
}


/*/*5. Orders
Write a function that calculates the total price of an order and prints it on the console. The function should receive
one of the following products: coffee, coke, water, snacks; and a quantity of the product. The prices for a single
piece of each product are:
 coffee – 1.50
water – 1.00
 coke – 1.40
 snacks – 2.00
Print the result rounded to the second decimal place.
Example
Input Output
water
5

5.00

Coffee
2

3.00

Hint
 Read the first two lines
 Create a function the pass the two variables in
 Print the result in the functions
*/