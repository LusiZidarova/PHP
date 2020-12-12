<?php
$input = readline();
$golds = [];
$newGolds = [];

while($input !== 'stop'){
    $golds[] = $input;
    $input = readline();
}
for($i=0; $i<count($golds); $i+=2){

    if (!isset($newGolds[$golds[$i]])){
        $newGolds[$golds[$i]] =  $golds[$i+1];
    }else {
        $newGolds[$golds[$i]]+=$golds[$i+1];
    }
}
foreach ($newGolds as $key=>$value){
    echo $key .' -> '. $value.'K'.PHP_EOL;
}

/*
1.Gold Miner - 100%
You are given a sequence of strings, each on a new line. Every odd line on the console is representing the type of the gold (e.g. Yellow, Rose, White, and so on), and its karats. Your task is to collect the resources while you receive "stop" and print each on a new line.
Print the resources and their quantities in format:
"{type} –> {karats}K"
The karats inputs will be in the range [1 … 24 000]
Examples
Input	Output
White
18
Yellow
24
Green
10
stop

Output
White -> 18K
Yellow -> 24K
Green -> 10K

Input
Rose
14
White
24
Yellow
10
Rose
10
stop

Output
Rose -> 24K
White -> 24K
Yellow -> 10K

 */