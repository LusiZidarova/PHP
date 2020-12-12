<?php
$letters =['s','t', 'a', 'r'];
$n = readline();
$count = 0;
$attack = [];
$destruction =[];
$str ='';
for ($i=0;$i<$n;$i++){
    $input = readline();
   for ($j=0;$j<strlen($input);$j++){
       if(in_array(strtolower($input[$j]),$letters)){
            $count++;
       }
   }
    for ($n=0;$n<strlen($input);$n++){
        $str.=chr(ord($input[$n])-$count);
    }
    preg_match('/@([A-Za-z]+)[^@\-!:>]*:([0-9]+)[^@\-!:>]*!([AD])![^@\-!:>]*->([0-9]*)/',$str,$matches);
    $name = $matches[1];
    $atak = $matches[3];
    if($atak == 'A'){
       $attack[] = $name;
    }else if($atak == 'D'){
        $destruction[] = $name;
    }
   $count = 0;
    $str ='';

}
sort($attack);
sort($destruction);
echo 'Attacked planets: '.count($attack).PHP_EOL;
foreach($attack as $value){
    echo '-> '.$value.PHP_EOL;
}
echo 'Destroyed planets: '.count($destruction).PHP_EOL;
foreach($destruction as $value){
    echo '-> '.$value.PHP_EOL;
}
/*
 * 1.Star Enigma - 100%
The war is in its peak, but you, young Padawan, can turn the tides with your programming skills. You are tasked to create a program to decrypt the messages of The Order and prevent the death of hundreds of lives.
You will receive several messages, which are encrypted using the legendary star enigma. You should decrypt the messages, following these rules:
To properly decrypt a message, you should count all the letters [s, t, a, r] – case insensitive and remove the count from the current ASCII value of each symbol of the encrypted message.
After decryption:
Each message should have a planet name, population, attack type ('A', as attack or 'D', as destruction) and soldier count.
The planet name starts after '@' and contains only letters from the Latin alphabet.
The planet population starts after ':' and is an Integer;
The attack type may be "A"(attack) or "D"(destruction) and must be surrounded by "!" (exclamation mark).
The soldier count starts after "->" and should be an Integer.
The order in the message should be planet name -> planet population -> attack type -> soldier count. Each part can be separated from the others by any character except: '@', '-', '!', ':' and '>'.
Input / Constraints
The first line holds n – the number of messages– integer in range [1…100];
On the next n lines, you will be receiving encrypted messages.
Output
After decrypting all messages, you should print the decrypted information in the following format:
First print the attacked planets, then the destroyed planets.
"Attacked planets: {attackedPlanetsCount}"
"-> {planetName}"
"Destroyed planets: {destroyedPlanetsCount}"
"-> {planetName}"
The planets should be ordered by name alphabetically.
Examples
Input	Output	Comments
2
STCDoghudd4=63333$D$0A53333
EHfsytsnhf?8555&I&2C9555SR

Output

Attacked planets: 1
-> Alderaa
Destroyed planets: 1
-> Cantonica

Comment> We receive two messages, to decrypt them we calculate the key:
First message has decryption key 3. So we substract from each characters code 3.
PQ@Alderaa1:30000!A!->20000
The second message has key 5.
@Cantonica:3000!D!->4000NM
Both messages are valid and they contain planet, population, attack type and soldiers count.
After decrypting all messages we print each planet according the format given.
Input
3
tt(''DGsvywgerx>6444444444%H%1B9444
GQhrr|A977777(H(TTTT
EHfsytsnhf?8555&I&2C9555SR

Output
Attacked planets: 0
Destroyed planets: 2
-> Cantonica
-> Coruscant

Comment
We receive three messages.
Message one is decrypted with key 4:
pp$##@Coruscant:2000000000!D!->5000
Message two is decrypted with key 7:
@Jakku:200000!A!MMMM
This is invalid message, missing soldier count, so we continue.
The third message has key 5.
@Cantonica:3000!D!->4000NM
"It’s a trap!" – Admiral Ackbar
 */