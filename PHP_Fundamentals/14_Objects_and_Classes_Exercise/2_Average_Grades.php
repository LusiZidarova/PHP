<?php

class Students{
    private $name;
    private $listGrades;
    private $averageGrade;
    
    public function __construct($name,$listGrades) {
        $this->name=$name;
        $this->listGrades=$listGrades;
        $this->averageGrade;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getListGrades(){
        return $this->listGrades;
    }
    public function setListGrades($listGrades){
        $this->listGrades=$listGrades;
    }
    public function getAverageGrade(){
        return $this->averageGrade;
    }
    public function setAverageGrade($averageGrade){
        $this->averageGrade=$averageGrade;
    }
}
$n = readline();
for ($i = 0; $i < $n; $i++) {
   
    $input = explode(' ',readline());
    $listGrades = [];
    $name = array_splice($input,0,1);
    $listGrades[] =  $input;
    
    $student = new Students($name[0],$listGrades[0]);
    $students[] = $student;
    
    $average = array_sum($student->getListGrades());
    $count = count($student->getListGrades());
    $averageGrade = number_format($average/$count,2);
    
    $student->setAverageGrade($averageGrade);
}
//var_dump($students);


usort($students, function (Students $n1, Students $n2){
    $nameAsc1 = $n1->getName();
    $nameAsc2 = $n2->getName();
    return $nameAsc1 <=> $nameAsc2;
});
    usort($students, function (Students $a1, Students $a2){
        $averageGrade1 = $a1->getAverageGrade();
        $averageGrade2 = $a2->getAverageGrade();
        return $averageGrade2 <=> $averageGrade1;
    }); 


var_dump($students);
foreach ($students as $student) {
   if($student->getAverageGrade()>=5.0){
    echo $student->getName().' -> '.$student->getAverageGrade().PHP_EOL;
} 
}


/*
 * 2.AveraverageGrade Grades
Define a class Student, which holds the following information about students: name, list of grades and averaverageGrade grade (calculated property, read-only). A single grade will be in range [2…6], e.g. 3.25 or 5.50.
Read an array of students and print the students that have averaverageGrade grade ≥ 5.00 ordered by name (ascending),
then by averaverageGrade grade (descending). Print the student name and the calculated averaverageGrade grade.
Examples
Input	Output
3
Ivan 3
Todor 5 5 6
Diana 6 5.50	
 * 
 Output
 * Todor -> 5.33
 * Diana -> 5.75

6
Petar 3 5 4 3 2 5 6 2 6
Mitko 6 6 5 6 5 6
Gosho 6 6 6 6 6 6
Ani 6 5 6 5 6 5 6 5
Iva 4 5 4 3 4 5 2 2 4
Ani 5.50 5.25 6.00	
 * 
 * Output
Ani -> 5.58
Ani -> 5.50
Gosho -> 6.00
Mitko -> 5.67
 */