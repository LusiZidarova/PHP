<?php

class Student{

    private $firstName;
    private  $lastName;
    private $age;
    private $city;

    public function __construct($firstname,$lastname,$age,$city){
        $this->setFirstName($firstname);
        $this->setLastName($lastname);
        $this->setAge($age);
        $this->setCity($city);
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function setFirstName($firstName){
        $this->firstName=$firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function setLastName($lastName){
        $this->lastName=$lastName;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age=$age;
    }
    public function getCity(){
        return $this->city;
    }
    public function setCity($city){
        $this->city=$city;
    }
}

$comand = readline();

$students = [];

while ($comand !== 'end') {
    $fields = explode(' ', $comand);
    
    $newStudent = new Student($fields[0],$fields[1],$fields[2],$fields[3]);
    
    $students[] = $newStudent;
    
    $comand = readline();
}
$city = readline();

foreach ($students as $student) {
    if($city == $student->getCity()){
        echo $student->getFirstName().' '.$student->getLastName().' is '.$student->getAge().' years old.'.PHP_EOL;
    }
}

/*
4.Students

Define a class Student, which holds the following information about students: first name, last name, age and hometown. 
Read list of students until you receive "end" command. After that, you will receive a city name. Print only students which are from the given city, in the following format: "{firstName} {lastName} is {age} years old.".
 
 * Examples
Input	
John Smith 15 Sofia
Peter Ivanov 14 Plovdiv
Linda Bridge 16 Sofia
Simon Stone 12 Varna
end
Sofia	
 * Output
 * John Smith is 15 years old.
Linda Bridge is 16 years old.
 * 
 Input
Anthony Taylor 15 Chicago
David Anderson 16 Washington
Jack Lewis 14 Chicago
David Lee 14 Chicago
end
Chicago	
 * Output
Anthony Taylor is 15 years old.
Jack Lewis is 14 years old.
David Lee is 14 years old.

Hints
Define a class Student with the following fields: firstName, lastName, age and city. 
Generate constructor in class Student.
Read a list of students.
Read a city name and print only students which are from the given city. * 
 */