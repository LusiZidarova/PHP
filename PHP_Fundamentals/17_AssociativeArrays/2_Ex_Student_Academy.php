<?php
$n = readline();
$studentsGradeTotal = [];
$studentsGradeCount= [];

for($i=0; $i<$n; $i++){
    $name = readline();
    $grade = floatval(readline());

    if(!key_exists($name,$studentsGradeTotal)){
        $studentsGradeTotal[$name] = $grade;
        $studentsGradeCount[$name] =1;
    }else {
        $studentsGradeTotal[$name] += $grade;
        $studentsGradeCount[$name] ++;
    }
}
$students = [];
foreach ($studentsGradeTotal as $name=> $grade){
    $avg = $grade/$studentsGradeCount[$name];
    $avarage = number_format($avg,2);
    $students[$name] = $avarage;

}
arsort($students);
foreach ($students as $name => $grade){
    if($grade >=4.50){
        echo $name .' -> '. $grade.PHP_EOL;
    }
}

/*
2.Student Academy - 100%
Write a program, which keeps information about students and their grades.
You will receive n pair of rows. First you will receive the student's name, after that you will receive his grade. Check if student already exists, and if not, add him. Keep track of all grades for each student.
When you finish reading data, keep students with average grade higher or equal to 4.50. Order filtered students by average grade in descending.
Print the students and their average grade in format:
"{name} –> {averageGrade}"
Format the average grade to the 2nd decimal place.
Examples
Input	Output
5
John
5.5
John
4.5
Alice
6
Alice
3
George
5

Output
John -> 5.00
George -> 5.00
Alice -> 4.50

Input
5
Amanda
3.5
Amanda
4
Rob
5.5
Christian
5
Robert
6

Output
Robert -> 6.00
Rob -> 5.50
Christian -> 5.00
 */