<?php
require "Person.php";
require "Product.php";

$personData =
    preg_split("/[=;]/",readline(),-1,PREG_SPLIT_NO_EMPTY);

$people =[];
for ($i=0; $i<count($personData)-1;$i+=2){
    $personName = $personData[$i];
    $personMoney = floatval($personData[$i+1]);

    try {
        $people[$personName]=new Person($personName,$personMoney);
    }catch (Exception $ex){
        echo $ex->getMessage();
        return;
    }
}
$productData =
    preg_split("/[=;]/",readline(),-1,PREG_SPLIT_NO_EMPTY);

$products =[];
for ($i=0; $i<count($productData)-1;$i+=2){
    $productName = $productData[$i];
    $productCost = floatval($productData[$i+1]);

   $products[$productName]=new Product($productName,$productCost);

}

$input = readline();
while($input != "END"){
    $commands = explode(" ",$input);
    $personName = $commands[0];
    $productName=$commands[1];

    if(array_key_exists($personName,$people) && array_key_exists($productName,$products)){
        /**
         * @var Person $person
         */
        $person = $people[$personName];
        try {
            $person->buyProduct($products[$productName]);
        }catch (Exception $ex){
            echo $ex->getMessage();

        }
    }
    $input = readline();
}

foreach ($people as $person){
    echo $person;
}
//print_r($people);

/*
 * Shopping Spree
Create two classes: class Person and class Product. Each person should have a name, money and a bag of products.
Each product should have name and cost. Name cannot be an empty string. Money cannot be a negative number.
Create a program in which each command corresponds to a person buying a product:
 If the person can afford a product add it to his bag.
 If a person doesn’t have enough money, print an appropriate message (&quot;[Person name] can&#39;t afford
[Product name]&quot;).
On the first two lines you are given all people and all products. Next you will be given all purchases people made
until END is reached. Print a message when someone makes a purchase. After all purchases print every person in
the order of appearance and all products that he has bought also in order of appearance. If nothing is bought, print
the name of the person followed by &quot;Nothing bought&quot;.
In case of invalid input (negative money exception message: &quot;Money cannot be negative&quot;) or empty name:
(empty name exception message &quot;Name cannot be empty&quot;) break the program with an appropriate message. See
the examples below:
Examples
Input Output
Pesho=11;Gosho=4;
Bread=10;Milk=2;
Pesho Bread
Gosho Milk
Gosho Milk
Pesho Milk
END

Output
Pesho bought Bread
Gosho bought Milk
Gosho bought Milk
Pesho can&#39;t afford Milk
Pesho - Bread
Gosho - Milk,Milk

Input
Mimi=0;
Kafence=2;
Mimi Kafence
END

Output
Mimi can&#39;t afford Kafence
Mimi – Nothing bought

Jeko=-3;
Chushki=1;
Jeko Chushki

Money cannot be negative
 */