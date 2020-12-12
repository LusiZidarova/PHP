<?php
$juices = [];
$juiceBottles = [];
$input = readline();

while($input !== 'End'){
    list($name,$quantity) = explode('=>',$input);
    if(!key_exists($name,$juices)){
             $juices[$name] = $quantity;
    }else{
        $juices[$name] += $quantity;
    }
    if ($juices[$name] >= 1000) {
        $juiceBottles[$name] = floor($juices[$name]/1000);
    }
    $input = readline();
}

foreach ($juiceBottles as $key => $value) {
   echo $key . '=> ' . $value . PHP_EOL;
}

/*
1.Cappy Juice - 100%
You will be given different juices, as strings. You will also receive quantity as a number. If you receive a juice, you already have, you must sum the current quantity of that juice, with the given one. When a juice reaches 1000 quantity, it produces a bottle. You must store all produced bottles and you must print them at the end.
Note: 1000 quantity of juice is one bottle. If you happen to have more than 1000, you must make as much bottles as you can, and store what is left from the juice.
Example: You have 2643 quantity of Orange Juice – this is 2 bottles of Orange Juice and 643 quantity left.
 Each element holds data about a juice and quantity in the following format:
"{juiceName} => {juiceQuantity}"
The program must stop reading data from the console when the “End” command is received!
The output is the produced bottles. The bottles must be printed in order of obtaining the bottles. Check the second example bellow - even though we receive the Kiwi juice first, we don’t form a bottle of Kiwi juice until the 4th line, at which point we have already created Pear and Watermelon juice bottles, thus the Kiwi bottles appear last in the output.
Examples
Input	Output
Orange => 2000
Peach => 1432
Banana => 450
Peach => 600
Strawberry => 549
End

Output
Orange => 2
Peach => 2

Input
Kiwi => 234
Pear => 2345
Watermelon => 3456
Kiwi => 4567
Pear => 5678
Watermelon => 6789
End

Output
Pear => 8
Watermelon => 10
Kiwi => 4
 */
