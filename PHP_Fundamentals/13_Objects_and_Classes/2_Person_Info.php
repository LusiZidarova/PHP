<?php

class Person{

    private $firstName;
    private  $lastName;
    private $age;
    
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
    
}

$person = new Person();
$person->setFirstName(readline());
$person->setLastName(readline());
$person->setAge(readline());

echo 'firstName: '. $person->getFirstName().PHP_EOL;
echo 'lastName: '.$person->getLastName().PHP_EOL;
echo 'age: '.$person->getAge().PHP_EOL;
/*
2.Person Info
Create a person class that receives first name, last name and age. Print the entries of a given object.
Examples
Input               Output
Peter               firstName: Peter
Pan                 lastName: Pan
20                  age: 20	


Hints
Create the Person class and create fields

Create getters and setters for firstName, lastName and age

Create new Person Object and print the result
 */