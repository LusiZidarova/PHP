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