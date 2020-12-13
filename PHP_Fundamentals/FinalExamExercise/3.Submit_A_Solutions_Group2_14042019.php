<?php
$input = readline();
$roads = [];

while($input != 'END'){
    $commands = explode('->',$input);
    switch ($commands[0]){
        case 'Add':
            $road = $commands[1];
            $racer = $commands[2];

            if(!key_exists($road,$roads)){
                $roads[$road][] = $racer;
            }else{
                $roads[$road][] = $racer;
            }
           break;
        case 'Move':
            $currentRoad = $commands[1];
            $racer = $commands[2];
            $nextRoad = $commands[3];

            if(in_array($racer,$roads[$currentRoad])){
                $index = array_search($racer,$roads[$currentRoad]);
                array_push($roads[$nextRoad],$racer);
                unset($roads[$currentRoad][$index]);
            }
            break;
        case 'Close':
            $road= $commands[1];
            if(key_exists($road,$roads)){
                unset($roads[$road]);
            }
            break;
    }
    $input = readline();
}
uksort($roads,function($length1,$length2) use ($roads) {
    $len1 = count($roads[$length1]);
    $len2 = count($roads[$length2]);
    if ($len1 === $len2) {
        return sort($roads);
    }
    return $len2 <=> $len1;
});
echo 'Practice sessions:'.PHP_EOL;
foreach ($roads as $road=>$racers){
    echo $road.PHP_EOL;
    foreach ($racers as $name){
        echo '++'.$name.PHP_EOL;
    }
}

/*
Problem 2. Practice sessions - 60% problem sus sortiraneto
The racers must practice for the race. Your job is to keep the records of the roads and the time for each lap. The track with the best time will be the chosen one for the finals.

Write a program, that keeps information about roads and the racers who practice on them.  When the practice begins, you’re going to start receiving data until you get the "END" message. There are three possible commands:
"Add->{road}->{racer}"
oAdd the road if it doesn't exist in your collection and add the racer to it.
"Move->{currentRoad}->{racer}->{nextRoad}"
oFind the racer on the current road and move him to the next one, only if he exists in the current road. Both roads will always be valid and will already exist.
"Close->{road}"
oFind the road and remove it from the sessions, along with the racers on it if it exists.
In the end, print all of the roads with the racers who have practiced and ordered by the count of the racers in descending order, then by the roads in ascending order. The output must be in the following format:
Practice sessions:
{road}
++{racer}
++{racer}
++{racer}
………………………..
Input / Constraints
You will be receiving lines of information in the format described above, until you receive the "END" command.
The input will always be in the right format.
Both roads from the "Move" command will always be valid and you don't need to check them explicitly.
Output
Print the roads with their racers in the format described above.
Examples
Input	Output
Add->Glencrutchery Road->Giacomo Agostini
Add->Braddan->Geoff Duke
Add->Peel road->Mike Hailwood
Add->Glencrutchery Road->Guy Martin
Move->Glencrutchery Road->Giacomo Agostini->Peel road
Close->Braddan
END

Output
Practice sessions:
Peel road
++Mike Hailwood
++Giacomo Agostini
Glencrutchery Road
++Guy Martin
Comments
We add racers to the roads they are racing on. When we receive the "Move" command, we check if Giacomo Agostini is on Glencrutchery Road and if he is, we remove him from it and add him to the next one - Peel road.
When we receive the "Close" command, we remove Brandon road and remove all its records. In the end we print the roads sorted by the count of racers on them and then by the names of the roads in ascending order.

Input
Add->Glen Vine->Steve Hislop
Add->Ramsey road->John McGuinness
Add->Glen Vine->Ian Hutchinson
Add->Ramsey road->Dave Molyneux
Move->Ramsey road->Hugh Earnsson->Glen Vine
Add->A18 Snaefell mountain road->Mike Hailwood
Add->Braddan->Geoff Duke
Move->A18 Snaefell mountain road->Mike Hailwood->Braddan
Move->Braddan->John McGuinness->Glen Vine
Close->A18 Snaefell mountain road
END

Output
Practice sessions:
Braddan
++Geoff Duke
++Mike Hailwood
Glen Vine
++Steve Hislop
++Ian Hutchinson
Ramsey road
++John McGuinness
++Dave Molyneux



 */