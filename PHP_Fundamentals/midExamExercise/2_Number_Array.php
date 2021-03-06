<?php
$numbers = explode(' ',readline());

$input = readline();

while($input !== 'End'){
    $commands = explode(' ',$input);
    $command = $commands[0];

    switch ($command){
        case 'Switch':
            $index = $commands[1];
            if(key_exists($index,$numbers)){
                $number= ($numbers[$index] >0)? -($numbers[$index]):$numbers[$index];
                    array_splice($numbers,$index,1,$number);
            }
            break;
        case 'Change':
            $index = $commands[1];
            $value = $commands[2];
            if(key_exists($index,$numbers)){
                array_splice($numbers,$index,1,$value);
            }
            break;
        case 'Sum':
            $sum = 0;
            $printable = $commands[1];
            switch ( $printable ){
                case 'Negative':
                    foreach($numbers as $number){
                        if ($number < 0){
                            $sum +=$number;
                        }
                    }
                    echo $sum;
                    break;
                case 'Positive':
                    foreach ($numbers as $number){
                        if ($number >= 0){
                            $sum +=$number;
                        }
                    }
                    echo $sum;
                    break;
                case 'All':
                    $sum = array_sum($numbers);
                    echo $sum;
                    break;
            }
            break;
    }
    $input = readline();
}
echo PHP_EOL;
foreach ($numbers as $number){
    if($number>=0){
        echo $number.' ';
    }
}
/*
Number Array -Programming Fundamentals Mid Exam - 30 June 2019 Group 1 - Judge 90%

Create a program that helps you keep track of a number array. First, you are going to receive the numbers оn a single line, separated by space, in the following format:
"{number1} {number2} {number3}… {numbern}"
Then you will start receiving commands until you read the "End" message. There are five possible commands:
"Switch {index}"
oFind the number on this index in your collection, if the index exists, and switch its sign (negative <-> positive).
"Change {index} {value}"
oReplace the number on the given index with the number given, if the index exists.
"Sum Negative"
oPrint the sum of all negative numbers.
"Sum Positive"
oPrint the sum of all positive numbers.
"Sum All"
oPrint the sum of all numbers.
In the end, print the positive numbers on a single line, keeping in mind that 0 is positive, separated by a single space in the following format:
"{number1} {number2} {number3}… {numbern}"
Input
On the 1st line you are going to receive the numbers of the array (always integers), separated by a single space.
On the next lines, until the "End" command is received, you will be receiving commands.
Output
Print the tasks in the format described above.


Examples
Input	Output
1 2 3 4 5
Switch 4
Change 0 -3
Sum Negative
End
Output:
-8
2 3 4
Comments
First, we receive the command "Switch 4" and we make the number on index 4 negative (because it is positive before the command). After this command, the task collection looks like this:
1 2 3 4 -5
Afterwards, we receive the "Change 0 -3" command and we need to change the number on index 0 with the number -3. The collection looks like this now:
-3 2 3 4 -5
After that, we receive the "Sum Negative" command, which means we need to print the sum of all negative numbers and it is -8.
In the end, we print all of the positive numbers. This is the result collection:
2 3 4

Input
1 2 3 4 5 4 3 2 1 0
Switch -4
Change 13 0
Switch 0
Sum All
End

Output:
23
2 3 4 5 4 3 2 1 0

 */
