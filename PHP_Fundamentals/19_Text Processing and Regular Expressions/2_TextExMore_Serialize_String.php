<?php
$string = str_split(readline());
$chars =[];
foreach ($string as $key=>$value){
    if (!key_exists($value,$chars)){
        $chars[$value] = array($key);
    }else{
        array_push($chars[$value], $key);
    }
}
foreach($chars as $key => $value){
    echo $key.':';
    echo implode('/',$value);
    echo PHP_EOL;
}
/*
 2.Serialize String - 100%
You have been tasked to serialize a string. The serialization is done in a special way, in which a character from that string is saved with the indexes at which it is found.
The input will consist of a single input line, containing a single string, which may consist of ANY ASCII character. Your task is to serialize the string in the following way:
{char}:{index1}/{index2}/{index3}
The char will be the character, and the indexes, will be the indexes it is found at in the string.
Examples
Input	Output
abababa

Output
a:0/2/4/6
b:1/3/5

Input
avjavamsdmcalsdm

Output
a:0/3/5/11
v:1/4
j:2
m:6/9/15
s:7/13
d:8/14
c:10
l:12
 */