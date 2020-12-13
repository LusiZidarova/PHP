<?php
$money = intval(readline());
$months = intval(readline());
$saveMoney = 0;

for ($i= 1; $i <= $months; $i++) {
    
    if($i%2!==0 && $i!==1){
        $saveMoney-=$saveMoney*0.16;
    }
    if($i%4==0){
        $saveMoney+=$saveMoney*0.25;
    }
    $saveMoney += ($money*0.25);
}

if($saveMoney>$money){
    $result = number_format(($saveMoney-$money),2);
   echo "Bravo! You can go to Disneyland and you will have ".$result."lv. for souvenirs.";
} else {
    $result = number_format(($money-$saveMoney),2);
    echo "Sorry. You need ".$result."lv. more.";
}

 
/*

Disneyland Journey
You are planning a trip to Disneyland in the next year. Are you able to save money for it?

Create a program that checks if you can save the money for the Disneyland’s journey. You have a certain number of months for which you can collect the money.
At the end of each month, you save 25% of the cost of the journey. 
At the beginning of every odd month (except the first one) you spent 16% of the money collected so far for clothes and shoes.
Every 4th (fourth) month at the beginning of the month your boss gives you а bonus. It is 25% of the money collected so far.	
If you save enough money for the journey, calculate how much money will be left for the souvenirs. Then print the following:
"Bravo! You can go to Disneyland and you will have {money}lv. for souvenirs."
If the saved money is less you should calculate how much money you need more. Then print the following:
"Sorry. You need {money}lv. more."
Both numbers should be formatted to the 2nd decimal place.
Input
On the 1st line you will receive how much the journey will cost – a real number in the range [500.0…10000.0]
On the 2nd line you will receive the number of months for which you have to collect money – an integer number in the range [1…12]
Output
 Print the output in the format described above.

Examples
Input	Output
1000
4
Output:	Bravo! You can go to Disneyland and you will have 87.50lv. for souvenirs.
Comments
You need 1000 leva for the journey and you have 4 months to collect them. Every month you can save 1000 * 25% => 250 lv. So, to the end of the 1st month you have 250 lv. To the end of the 2nd month -  250 + 250 -> 500 lv. To the begging of the 3th month (odd month) you spent 80 lv. (500 * 16%) for clothes and shoes, then you save 250 lv, so now you have 670 lv. Last month is the fourth month and you save 670 + 167.5 (670 * 25%) + 25 = 1087.5 lv. You have 1087.5 – 1000 = 87.5 lv., so you can go to the trip.
Input
3265
3
 Output:
 Sorry. You need 1077.45lv. more.

 */
