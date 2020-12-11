<?php
$grade = readline();

printInWords($grade);
   
function printInWords($grade){
    switch ($grade) {
        case ($grade>=2 && $grade<3):echo 'Fail';
             break;
        case ($grade>=3 && $grade<=3.49):echo 'Poor';
             break;
        case ($grade>=3.50 && $grade<=4.49):echo 'Good';
             break;
        case ($grade>=4.50 && $grade<=5.49):echo 'Very good';
             break;
        case ($grade>=5.5 && $grade<=6):echo 'Excellent';
            break;

        default:
            break;
    }
}

/*
Write a function that receives a grade between 2.00 and 6.00 and prints the corresponding grade in words
 2.00 – 2.99 - "Fail"
 3.00 – 3.49 - "Poor"
 3.50 – 4.49 - "Good"
 4.50 – 5.49 - "Very good"
 5.50 – 6.00 - "Excellent"
 * Examples
Input Output
3.33  Poor
4.50  Very good
2.99  Fail
Hint
Read the grade from the console and pass it to a function:
$grade = readline();
 * printInWords($grade);
 *  */