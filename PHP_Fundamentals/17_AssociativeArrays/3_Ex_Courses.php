<?php
$input = readline();
$courses = [];
while($input !== 'end'){
    list($cours,$student)= explode(' : ',$input);

    if(!isset($courses[$cours])){
        $courses[$cours] = array();
    }
    $courses[$cours][] = $student;
    $input = readline();
}
uksort($courses,function($length1,$length2) use ($courses) {
    $len1 = count($courses[$length1]);
    $len2 = count($courses[$length2]);
    if ($len1 === $len2) {
        return sort($courses[$cours]);
    }
    return $len2 <=> $len1;
});
foreach($courses as $course => $students){
    sort($students);
    $count = count($students);
    echo $course.': '.$count.PHP_EOL;
    foreach ($students as $student){
        echo '-- '.$student.PHP_EOL;
    }
}


/*
3.Courses - 100%
Write a program, which keeps information about courses. Each course has a name and registered students.
You will receive course name and student name, until you receive the command "end". Check if such course already exists, and if not, add the course. Register the user into the course. When you do receive the command "end", print the courses with their names and total registered users, ordered by the count of registered users in descending order. For each contest print registered users ordered by name in ascending order.
Input
Until you receive "end", the input come in the format: "{courseName} : {studentName}".
Output
Print information about each course, following the format:
"{courseName}: {registeredStudents}"
Print information about each student, following the format:
"-- {studentName}"
Examples
Input	Output
Programming Fundamentals : John Smith
Programming Fundamentals : Linda Johnson
JS Core : Will Wilson
Java Advanced : Harrison White
end
Output
Programming Fundamentals: 2
-- John Smith
-- Linda Johnson
JS Core: 1
-- Will Wilson
Java Advanced: 1
-- Harrison White
I
Input
Algorithms : Jay Moore
Programming Basics : Martin Taylor
Python Fundamentals : John Anderson
Python Fundamentals : Andrew Robinson
Algorithms : Bob Jackson
Python Fundamentals : Clark Lewis
end
Output
Python Fundamentals: 3
-- Andrew Robinson
-- Clark Lewis
-- John Anderson
Algorithms: 2
-- Bob Jackson
-- Jay Moore
Programming Basics: 1
-- Martin Taylor
 */