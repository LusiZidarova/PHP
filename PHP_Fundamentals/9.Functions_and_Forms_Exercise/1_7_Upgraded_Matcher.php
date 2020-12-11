<?php
$name= explode(' ',readline());
$quantity= explode(' ',readline());
$price= explode(' ', readline());

$command = explode(' ',readline());

while($command[0] != 'done'){
    $qty = intval($command[1]);
    $i= array_search($command[0],$name);
    if($command[0] == $name[$i] && isset($quantity[$i]) && $qty <=$quantity[$i] ){
        $total_price = number_format($qty*$price[$i], 2);
        $quantity[$i] = $quantity[$i]- $qty;
        echo $name[$i]. ' x '.$qty.' costs '. $total_price.PHP_EOL;
    }else{
        echo 'We do not have enough '. $name[$i].PHP_EOL;
        }
    $command = explode(' ',readline());
}


/*
7. Upgraded Matcher
 For this task, you can use your solution from Inventory Matcher. You will again receive 3 arrays – one with strings,
one with long integer numbers (float) and one with floats. Again, the price and quantity correspond to a name,
which is located on same index as the name.
This time only the arrays containing the names and the array containing the prices will have the same length. If in
the quantities array there is no index, which corresponds to the name, you should assume the quantity is 0.
On top of that the products, which you receive after the arrays will contain not only a string for the name, but also a
long integer number (float), which is the quantity that must be ordered.
If you have enough quantity, calculate the total price by multiplying the ordered quantity times the price and print
it in the following format:
{product name} x {quantity ordered} costs {total price of the order}
Format the price to the 2 nd decimal place. Do not forget to decrease the quantity of the product.
 * 
 If you do not have enough quantities print:
We do not have enough {product name}
Input
 On the first line, you will receive array of strings, which represent the names of the products.
 On the second line, you will receive array of long integer numbers (float), which represent the quantities
of the products.
 On the third line, you will receive array of floats, which represent the prices of the products.
Constraints
 The name and price arrays will always have the same length.
 You will always receive existing products
Examples
 Input 

Bread Juice Fruits Lemons Beer
10 50 20 30
2.34 1.23 3.42 1.50 3.00
Bread 10
Juice 5
Beer 20
done

Output
Bread x 10 costs 23.40
Juice x 5 costs 6.15
We do not have enough Beer

Input
Tomatoes Onions Lemons
10000 2000
5.40 3.20 2.20
Tomatoes 5000
Tomatoes 5000
Tomatoes 1
done

Output
Tomatoes x 5000 costs 27000.00
Tomatoes x 5000 costs 27000.00
We do not have enough Tomatoes
 */