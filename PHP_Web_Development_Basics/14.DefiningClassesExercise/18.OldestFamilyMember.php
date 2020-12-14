<?php
class  Person {
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;

    /**
     * Person constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    public function __toString()
    {
        return $this->getName()." ".$this->getAge();
    }
}
class Family {
    private $members;
    /**
     * @var Person
     */
    private $oldestMember;

    public function __construct()
    {
        $this->members = [];
        $this->oldestMember=null;
    }
    public function getOldestMember():?Person //?Person oznachava che vrushta null ili Person
    {
        return $this->oldestMember;
    }

    public function addMember(Person $person):void
    {
        if(null === $this->oldestMember || $this->getOldestMember()->getAge() < $person->getAge()){
            $this->oldestMember = $person;
        }
        $this->members[]= $person;
    }
}

$n = intval(readline());
$family = new Family();
while($n--){
    list($name,$age)= explode(' ',readline());
    $age = intval($age);
    $person = new Person($name,$age);
    $family ->addMember($person);
}
echo $family->getOldestMember();

/*
 * Oldest Family Member
Create class Person with fields name and age. Create a class Family. The class should have list of people, method for
adding members (void addMember(Person member)) and a method returning the oldest family member (Person
getOldestMember()). Write a program that reads name and age for N people and adds them to the family. Then
print the name and age of the oldest member.
If you’ve defined the class correctly, the test should pass.
Examples
Input Output Input Output
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
 *
 */