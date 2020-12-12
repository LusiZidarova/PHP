<?php
$patern = '/>>([a-zA-Z]+)<<([\d]+[\d.]{1,})!(\d+)/';
$input = readline();
$totalPrice = 0;
$matches=[];
echo 'Bought furniture:'.PHP_EOL;
while($input !== 'Purchase'){
    if(preg_match($patern,$input,$matches) ){
        $product = $matches[1];
        $price = $matches[2];
        $qty = $matches[3];
        $totalPrice +=$price*$qty;
        echo $product.PHP_EOL;
    }
    $input = readline();
}
$totalPrice = number_format($totalPrice,2,'.','');
echo 'Total money spend: '.$totalPrice;


/*$input = readline();
$totalPrice = 0;
$cities=[];
while($input !== 'Purchase'){
    $city = [];
    $price = [];
    $quantity=[];
    if(preg_match('/(?<name>(?<=>>)[A-Z]{1}\w+(?=<<))/',$input,$city) &&
        preg_match('/(?<price>(?<=<<)[\d.-]+(?=\!))/',$input,$price) &&
         preg_match('/(?<qty>(?<=\!)\d+)/',$input,$quantity)
    ){
        $cities[]=$city['name'];
        $totalPrice+=$price['price']*$quantity['qty'];
    }
    $input = readline();
}
echo 'Bought furniture:'.PHP_EOL;
echo implode(PHP_EOL,$cities);
echo PHP_EOL.'Total money spend: '.number_format($totalPrice,2,'.','');*/

/*
2.Furniture - 100%
Write a program to calculate the total cost of different types of furniture. You will be given some lines of
input until you receive
 the line "Purchase". For the line to be valid it should be in the following format:
">>{furniture name}<<{price}!{quantity}"
The price can be floating point number or whole number. Store the names of the furniture and
the total price. At the end print the each bought furniture on separate line in the format:
"Bought furniture:
{1st name}
{2nd name}
…"
And on the last line print the following: "Total money spend: {spend money}" formatted to the second decimal point.
Examples
Input	Output	Comment
>>Sofa<<312.23!3
>>TV<<300!5
>>Invalid<<!5
Purchase

Output
	Bought furniture:
Sofa
TV
Total money spend: 2436.69

Comment:Only the Sofa and the TV are valid, for each of them we multiply the price by the quantity and print the result

 */