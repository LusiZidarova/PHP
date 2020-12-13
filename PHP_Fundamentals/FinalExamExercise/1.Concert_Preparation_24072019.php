<?php
$input  = readline();
$bands = [];
$times = [];

while($input !== 'start of concert'){
    $commands = explode('; ',$input);

    switch ($commands[0]){
        case 'Play':
            $bandName = $commands[1];
            $time = $commands[2];
            if(!key_exists($bandName,$times) ){
                $times[$bandName] = $time;

            }else{
                $times[$bandName]+= $time;
            }

            break;
        case  'Add':
            $bandName = $commands[1];
            $members = explode(', ',$commands[2]);

            if(!key_exists($bandName,$bands) ){
                $bands[$bandName] = array();
                foreach ($members as $member){
                    array_push($bands[$bandName],$member);
                }
            }else {
                foreach ($members as $member){
                    if(!in_array($member,$bands[$bandName])){
                        array_push($bands[$bandName],$member);
                    }
                }
            }
            break;
    }
    $input  = readline();
}
$bandsInfo = readline();

ksort($times);
arsort($times);

echo 'Total time: '.array_sum($times).PHP_EOL;
foreach ($times as $band => $time){
    echo $band.' -> '.$time.PHP_EOL;
}

if(key_exists($bandsInfo,$bands)){
    echo $bandsInfo.PHP_EOL;
    foreach($bands[$bandsInfo] as $name){
        echo '=> '.$name.PHP_EOL;
    }
}

/*
 * Problem 1 – Concert  - Programming Fundamentals Final Exam Preparation - 24 July 2019 - 100%
Mandy was hired to accept the group applications for the upcoming concert. She thought that it would be easy but now she is in trouble. She needs a programmer to make an application that will help her to safe the concert. She needs you.
You will read commands until you receive "start of concert" command.
There are two types of commands:
"Add; {bandName}; {member 1}, {member 2}, {member 3}" - applies a band and a list of members to the concert. All members must be unique so don't add duplicates. If you receive the same band twice add only those members that aren't present in the list.
"Play; {bandName}; {time}" – the band with the given name plays an amount of time on the stage.  If you receive a band that has already applied in the concert, just increase the band time.
If in both commands the band does not exist, add it.
At the end you have to print the total time and the bands ordered by the time on stage in descending order, then by band name in ascending order.
Also the final input line will be "{bandName}" and you have to print all members for this band in insertion order.
Input / Constraints
The time of the bands – integer in range [0 – 231 - 1]
There will always be at least one member in the group
The bands will always have time on stage
The final input line will always contain an existing band name
Input will always be valid and in the range specified. You don’t need to check it
Output
Total time: {totalTime}
{firstBandName} -> {firstBandTime}
{secondBandName} -> {secondBandTime}
{thirdBandName} -> {thirdBandTime}
…
{bandName}
=> {firstMemberName}
=> {secondMemberName}
=> {thirdMemberName}
…
Examples
Input	Output
Play; The Beatles; 2584
Play; The Batle; 2584
Add; The Beatles; John Lennon, Paul McCartney, George Harrison, Ringo Starr
Add; Eagles; Glenn Frey, Don Henley, Bernie Leadon, Randy Meisner
Play; Eagles; 1869
Play; Ais; 1869
Add; The Rolling Stones; Brian Jones, Mick Jagger, Keith Richards
Add; The Rolling Stones; Brian Jones, Mick Jagger, Keith Richards, Bill Wyman, Charlie Watts, Ian Stewart
Play; The Rolling Stones; 4239
start of concert
The Rolling Stones

Ouptut
	Total time: 8692
The Rolling Stones -> 4239
The Beatles -> 2584
Eagles -> 1869
The Rolling Stones
=> Brian Jones
=> Mick Jagger
=> Keith Richards
=> Bill Wyman
=> Charlie Watts
=> Ian Stewart

Input
Add; The Beatles; John Lennon, Paul McCartney
Add; The Beatles; Paul McCartney, George Harrison
Add; The Beatles; George Harrison, Ringo Starr
Play; The Beatles; 3698
Play; The Beatles; 3828
start of concert
The Beatles

Output
Total time: 7526
The Beatles -> 7526
The Beatles
=> John Lennon
=> Paul McCartney
=> George Harrison
=> Ringo Starr
 */