<?php
class Person {
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;
    /**
     * @var string
     */
    private  $occupation;

    /**
     * Person constructor.
     * @param string $name
     * @param int $age
     * @param string $occupation
     */

    public function __construct( string $name,int $age,string $occupation)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setOccupation($occupation);
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
    private function setName(string $name): void
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
    private function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->occupation;
    }

    /**
     * @param string $occupation
     */
    private function setOccupation(string $occupation): void
    {
        $this->occupation = $occupation;
    }

    public function __toString()
    {
        return "{$this->getName()} - age: {$this->getAge()}, occupation: {$this->getOccupation()}\n";
    }


}
$people = [];
$input = readline();

while ($input !== "END"){
    list($name,$age,$occupation) = explode(" ",$input);
    $age = intval($age);

    $person = new Person($name,$age,$occupation);
    $people[] = $person;

    $input = readline();
}

usort($people,function (Person $person1,Person $person2){
    return $person1->getAge() <=> $person2->getAge();
});
/**
 * @var Person $person
 */
foreach ($people as $person){
    echo $person;
}

//print_r($people);
/*
 * 8.Print People
Create a class Person. Every person should have name, age and occupation. Your task is to create the class and read
some people, while adding them to an array. Sort them by age and print them in the given format.
Examples
Input	Output
Gosho 22 Dentist
Mimi 13 Student
END
Output:
Mimi - age: 13, occupation: Student
Gosho - age: 22, occupation: Dentist

 */
