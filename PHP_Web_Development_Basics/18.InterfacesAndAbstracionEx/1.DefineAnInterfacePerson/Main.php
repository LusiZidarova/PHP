<?php
spl_autoload_register();

class Main
{
    public function run(){
        $this->readData();
    }
    public function readData(){
        $name = readline();
        $age =  intval(readline());

        $citizen = new Citizen($name,$age);
        echo $citizen;
    }

}
$main = new Main();
$main ->run();

/*
 * 1. Define an Interface Person
Define an interface Person with two methods that should be implemented by a class: setName() and setAge().
Define a class Citizen which implements Person and has a constructor which takes a string name and an int age and
uses the methods given by the interface. Write the methods and add a magic method __toString() which willl
print the name and age of the person (example: Jackson, 35).
Create an instance of the class and use the magic method __toString() to print the name and age of the person.
Examples
Input Output
Peter
25
Output
Peter
25
 */