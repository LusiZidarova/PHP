<?php
$items = ['shards'=>array('Shadowmourne',0),
    'fragments'=> array('Valanyr',0),
    'motes'=> array('Dragonwrath',0)
    ];
$junks=[];
$win = false;
while(!$win){
    $args = explode(' ',readline());
   for ($i=0; $i< count($args); $i+=2){
       $sum = intval($args[$i]);
       $item = strtolower($args[$i+1]);
           if(key_exists($item,$items) ){
               $items[$item][1] += $sum ;
               if($items[$item][1] >= 250) {
                   $items[$item][1] -=250;
                   $win = true;
                   break;
               }
               continue;
           }
           if(!key_exists($item,$junks)){
                   $junks[$item] = 0;
               }
            $junks[$item] += $sum;
           }

    }
echo $items[$item][0].' obtained!'.PHP_EOL;

uksort($items,function($k1,$k2) use ($items){
    if ($items[$k1][1] === $items[$k2][1]) {
        return sort($items);
    }
    return $items[$k2][1] <=> $items[$k1][1];
});

/*uksort($junks,function($k1,$k2) use ($junks){

    return $k1 <=> $k2;
});*/
ksort($junks);
foreach ($items as $key => $value){
    echo  $key.': '.$items[$key][1].PHP_EOL;

}
foreach ($junks as $key => $value){
    echo $key.': '.$value.PHP_EOL;
}


/*
7.Legendary Farming - Judge 80%
You’ve beaten all the content and the last thing left to accomplish is own a legendary item.
 However, it’s a tedious process and requires quite a bit of farming. Anyway, you are not too pretentious – any
legendary will do.
 The possible items are:
Shadowmourne – requires 250 Shards;
Valanyr – requires 250 Fragments;
Dragonwrath – requires 250 Motes;
Shards, Fragments and Motes are the key materials, all else is junk. You will be given lines of input, such as
2 motes 3 ores 15 stones. Keep track of the key materials - the first that reaches the 250 mark wins the race. At that point,
 print the corresponding legendary obtained.
 Then, print the remaining shards, fragments, motes, ordered by quantity in descending order, then by name in ascending order,
each on a new line. Finally, print the collected junk items, in alphabetical order.
Input
Each line of input is in format {quantity} {material} {quantity} {material} … {quantity} {material}
Output
On the first line, print the obtained item in format {Legendary item} obtained!
On the next three lines, print the remaining key materials in descending order by quantity
oAll materials are printed in format {material}: {quantity}
oIf two key materials have the same quantity, print them in alphabetical order
On the final several lines, print the junk items in alphabetical order
oAll materials are printed in format {material}: {quantity}
oAll output should be lowercase, except the first letter of the legendary
Examples
Input	Output
3 Motes 5 stones 5 Shards
6 leathers 255 fragments 7 Shards

Outpu
Valanyr obtained!
fragments: 5
shards: 5
motes: 3
leathers: 6
stones: 5

Input
123 silver 6 shards 8 shards 5 motes
9 fangs 75 motes 103 MOTES 8 Shards
86 Motes 7 stones 19 silver

Output
Dragonwrath obtained!
shards: 22
motes: 19
fragments: 0
fangs: 9
silver: 123


 */