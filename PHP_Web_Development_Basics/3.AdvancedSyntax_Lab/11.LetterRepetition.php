<?php
$input = readline();
$newArray=[];
for($i=0; $i < strlen($input); $i++){
    if (!key_exists(ord($input[$i]), $newArray)) {
        $newArray[ord($input[$i])] = 1;
    } else {
        $newArray[ord($input[$i])]++;
    }
}

foreach ($newArray as $key=>$value){
    echo chr($key)." -> ".$value.PHP_EOL;
}
/*
 * 11.Letter Repetition -100/100 -Web-Dev-Basics -Exercises Advanced Syntax and Operations - Lab
You will be given a single string, containing random ASCII character. Your task is to print every character, and how many
times it has been used in the string.
Examples
Input
aaabbaaabbbccc

Output:
a -> 6
b -> 5
c -> 3
Input
The quick brown fox jumps over the lazy dog
Output:
T -> 1
h -> 2
e -> 3
  -> 8
q -> 1
u -> 2
i -> 1
c -> 1
k -> 1
b -> 1
r -> 2
o -> 4
w -> 1
n -> 1
f -> 1
x -> 1
j -> 1
m -> 1
p -> 1
s -> 1
v -> 1
t -> 1
l -> 1
a -> 1
z -> 1
y -> 1
d -> 1
g -> 1

 */
