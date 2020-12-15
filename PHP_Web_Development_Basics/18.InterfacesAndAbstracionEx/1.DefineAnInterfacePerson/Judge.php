<?php
interface Person
{
    public function setName(string $name):void;
    public function setAge(int $age):void;
}
class Citizen implements Person
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name=$name;
    }

    /**
     * @param int $age
     */

    public function setAge(int $age): void
    {
        $this->age=$age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
    public function __toString()
    {
        return $this->getName().PHP_EOL.$this->getAge();
    }
}
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
 * 1.Define an Interface Person - 100/100
Define an interface Person with two methods that should be implemented by a class: setName() and setAge().
Define a class Citizen which implements Person and has a constructor which takes a string name and an int age and uses the methods given by the interface. Write the methods and add a magic method __toString() which willl print the name and age of the person (example: Jackson, 35).
 Create an instance of the class and use the magic method __toString() to print the name and age of the person.
Examples
Input	Output
Peter
25	Peter
25

 */