<?php
 class Person
 {
     private $name;
     private $age;
     
     public function __construct(string $name, int $age){
         $this->name = $name;
         $this->age =$age;
     }
     
     public function getName():string
     {
        return  $this->name;
     }
     public function getAge():int{
         return $this->age;
     }
 }
 
 class Family
 {
     private $members;
     private $oldestMember;
     
     public function __construct(){
         $this->members = [];
         $this->oldestMember = null;
     }
     
     public function addMember(Person $person):void
     {  
         if(null === $this->oldestMember || $this->oldestMember->getAge() < $person->getAge()){
            $this->oldestMember= $person;
         }
         $this->members[] = $person;
     }
     public function getOldestMember():Person{
         return $this->oldestMember;
     }
 }

 $n = intval(readline());
 $family = new Family();
 while($n--){
     list($name,$age) = explode(' ', readline());
     $person = new Person($name, $age);
     $family ->addMember($person);
 }
echo $family ->getOldestMember()->getName().' '.$family->getOldestMember()->getAge();
 /*
  * 
Problem 18. Oldest Family Member
  Create class Person with fields name and age. Create a class Family. The class should have list of people, method for
adding members (void addMember(Person member)) and a method returning the oldest family member (Person
getOldestMember()). Write a program that reads name and age for N people and adds them to the family. Then
print the name and age of the oldest member.
If you’ve defined the class correctly, the test should pass.
Examples
Input 
3
Pesho 3
Gosho 4
Annie 5

Output
Annie 5
   
    
 Input
 5
Steve 10
Christopher 15
Annie 4
Ivan 35
Maria 34
Output
Ivan 35
  */
