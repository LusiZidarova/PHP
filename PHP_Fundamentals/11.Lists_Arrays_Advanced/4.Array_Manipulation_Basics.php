<?php
$numbers = array_map('intval',explode(' ',readline()));

$input = readline();
while($input != 'end'){
    $commands = explode(' ',$input);
    switch ($commands[0]){
        //Add {number}: add a number to the end of the array
        case 'Add':
            array_push($numbers,$commands[1]);
            break;
            //Remove {number}: remove number from the array
        case 'Remove':
            $number = $commands[1];
                $index = array_search($number,$numbers);
                array_splice($numbers,$index,1);
            break;
            //RemoveAt {index}: removes number at a given index
        case 'RemoveAt':
            $index = $commands[1];
                array_splice($numbers,$index,1);
            break;
            //Insert {number} {index}: inserts a number at a given index
        case 'Insert':
            $number = $commands[1];
            $index = $commands[2];
                array_splice($numbers,$index,0,$number);
            break;
    }

    $input = readline();
}
echo implode(' ',$numbers);

/*4. Array Manipulation Basics
Write a program that reads an array of integers. Then until you receive &quot;end&quot;, you will be given different
commands:
Add {number}: add a number to the end of the array
Remove {number}: remove number from the array
RemoveAt {index}: removes number at a given index
Insert {number} {index}: inserts a number at a given index
Note: All the indices will be valid!
When you receive the &quot;end&quot; command print the final state of the array (separated by spaces)
Example
Input
4 19 2 53 6 43
Add 3
Remove 2
RemoveAt 1
Insert 8 3
end

Output
4 53 6 8 43 3
*/