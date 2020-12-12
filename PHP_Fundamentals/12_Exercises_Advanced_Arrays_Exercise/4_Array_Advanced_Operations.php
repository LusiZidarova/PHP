<?php
$arr= array_map('intval',explode(' ', readline()));
$comands = readline();

while($comands !== 'End'){
    $args = explode(' ', $comands);
    $comand = $args[0];

    switch ($comand) {
        case 'Add':
            $element = $args[1];;
            array_push($arr, $element);
            break; 
        case 'Insert':
            $number = $args[1];
            $index= $args[2];
            array_splice($arr, $index, 0, $number);
            break;
            //Remove {index} - remove at index
        case 'Remove':
            $index =$args[1];
            if($index <count($arr) ){
                array_splice($arr, $index, 1);
            }else {
                echo "Invalid index".PHP_EOL;
            }
            break;
            //Shift left {count} - first number becomes last – count times
        case 'Shift':
            $count = $args[2];
            switch($args[1]){
                case 'left':
                    for($i=0;$i<$count;$i++){
                        $first = array_shift($arr);
                        array_push($arr,$first);
                    }
                    break;
                    //Shift right {count} - last number becomes first - count times
                case 'right':
                    for($i=0;$i<$count;$i++){
                        $last = array_pop($arr);
                        array_splice($arr,0,0,$last);
                    }
                    break;
            }
        break;
    }
    $comands = readline();
}
echo implode(' ', $arr);


/*
4.Array Advanced Operations
 * You will be given an array of integer numbers on the first input line. Until you receive "
 * End" you will be given operations you have to apply on the array. The possible commands are:
Add {number} - add number at the end
Insert {number} {index} - insert number at given index
Remove {index} - remove at index
Shift left {count} - first number becomes last – count times
Shift right {count} - last number becomes first - count times
Note: it is possible that the index given is outside of the bounds of the array.
In that case print "Invalid index"

Examples
Input	                    Output
1 23 29 18 43 21 20         43 20 5 1 23 29 18
Add 5
Remove 5
Shift left 3
Shift left 1
End 

 Input	                    Output * 	
5 12 42 95 32 1             Invalid index
Insert  3 0                 5 12 42 95 32 8 1 3
Remove 10
Insert 8 6
Shift right 1
Shift left 2
End	

 */

