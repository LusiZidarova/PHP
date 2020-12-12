<?php
$input = readline();
$chars = [];
while($input != 'end'){
    $args = explode(':',$input);
    $char = $args[0];
    $positions = explode('/',$args[1]);
    foreach($positions as $value){
        $chars[$value] = $char;
    }
    $input = readline();
}
ksort($chars);
echo implode('',$chars);
/*
 3.Deserialize String - 100%
Write a program, which takes the output from the previous task and turns it back into a string.
Until you receive the line “end”, you will receive several lines of input on the console, in the following format:
"{letter}:{index1}/{index2}/{index…}/{indexN}"
Your task is to take every letter and its index and form a string out of them.
Examples
Input	Output
a:0/2/4/6
b:1/3/5
end

Output
abababa

Input
a:0/3/5/11
v:1/4
j:2
m:6/9/15
s:7/13
d:8/14
c:10
l:12
end

Output
avjavamsdmcalsdm
 */