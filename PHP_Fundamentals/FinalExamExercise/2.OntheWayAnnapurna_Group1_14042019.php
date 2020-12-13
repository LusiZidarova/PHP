<?php
$input = readline();
$stores = [];

while($input !=='END'){
    $commands = explode('->',$input);

    switch ($commands[0]){
        case 'Add':
           $store= $commands[1];
           $items = explode(',',$commands[2]);
           if(count($items)== 1){
                if(!key_exists($store,$stores)){
                    $stores[$store][] = $items[0];
                }else{
                    $stores[$store][] = $items[0];
                }
           }else{
               foreach ($items as $item) {
                   if(!key_exists($store,$stores)){
                       $stores[$store][] = $item;
                   }else{
                       $stores[$store][] = $item;
                   }
               }
           }
           break;
        case 'Remove':
            $store = $commands[1];
            if(key_exists($store,$stores)){
                unset($stores[$store]);
            }
           break;
    }

    $input = readline();
}

$counts = array_map(function($v) { return count($v); }, $stores);
$keys = array_keys($stores);
array_multisort($counts, SORT_DESC, $keys, SORT_DESC, $stores);

echo 'Stores list:'.PHP_EOL;
foreach ($stores as $store=>$items){
    echo $store.PHP_EOL;
    foreach ($items as $item){
        echo '<<'.$item.'>>'.PHP_EOL;
    }
}

/*
Problem.1 Arriving in Kathmandu -Technology Fundamentals Final Exam - 14 April 2019 Group I -100%

Problem 2. On the Way to Annapurna
You’ve hired a Sherpa and he has a list of supplies you both need to go on the way. He has passed you some notes and you have to order them correctly in a diary before you start circling around the town’s stores.

Create a program, that lists stores and the items that can be found in them. You are going to be receiving commands with the information you need until you get the "End" command. There are three possible commands:
"Add->{Store}->{Item}"
oAdd the store and the item in your diary. If the store already exists, add just the item.
"Add->{Store}->{Item},{Item1}…,{ItemN}"
oAdd the store and the items to your notes. If the store already exists in the diary – add just the items to it.
"Remove->{Store}"
oRemove the store and its items from your diary, if it exists.
In the end, print the collection sorted by the count of the items in descending order and then by the names of the stores, again, in descending order in the following format:
Stores list:
{Store}
<<{Item}>>
<<{Item}>>
<<{Item}>>
Input / Constraints
You will be receiving information until the “END” command is given.
There will always be at least one store in the diary.
Input will always be valid, there is no need to check it explicitly.
Output
Print the list of stores in the format given above.
Examples
Input	Output
Add->PeakSports->Map,Navigation,Compass
Add->Paragon->Sunscreen
Add->Groceries->Dried-fruit,Nuts
Add->Groceries->Nuts
Add->Paragon->Tent
Remove->Paragon
Add->Pharmacy->Pain-killers
END

Output
Stores list:
PeakSports
<<Map>>
<<Navigation>>
<<Compass>>
Groceries
<<Dried-fruit>>
<<Nuts>>
<<Nuts>>
Pharmacy
<<Pain-killers>>
Comments
First, we receive the "Add" command with a couple of items and we have to add the store and the items to. We keep doing that for each line of input and when we receive the "Remove" command, we delete the store and its items from our records. In the end we print the stores sorted by the count of their items and then by their names.

Input
Add->Peak->Waterproof,Umbrella
Add->Groceries->Water,Juice,Food
Add->Peak->Tent
Add->Peak->Sleeping-Bag
Add->Peak->Jacket
Add->Groceries->Lighter
Remove->Groceries
Remove->Store
END

Output
Stores list:
Peak
<<Waterproof>>
<<Umbrella>>
<<Tent>>
<<Sleeping-Bag>>
<<Jacket>>


Add->PeakSports->Map,Navigation,Compass
Add->Paragon->Sunscreen
Add->Groceries->Dried-fruit,Nuts
Add->Groceries->Nuts
Add->Paragon->Tent
Add->Pharmacy->Pain-killers
END

 */