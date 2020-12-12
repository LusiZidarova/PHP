<?php
class Person{
    private $name;
    private $id;
    private $age;
    
    public function __construct($name,$id,$age) {
        $this->name=$name;
        $this->id=$id;
        $this->age=$age;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age=$age;
    }
}

$input = readline();
while ($input !== 'End') {
    $args = explode(" ",$input);
    $name = $args[0];
    $id = $args[1];
    $age = intval($args[2]);
    
    $person = new Person($name, $id, $age);
    $people[]=$person;
    $input=readline();
}
usort($people, function (Person $p1,Person $p2){
    $age1 = $p1->getAge();
    $age2 = $p2->getAge();
    return $age1<=>$age2;
});

foreach ($people as $person) {
    $name = $person->getName();
    $id = $person->getId();
    $age = $person->getAge();
    
    echo $name .' with ID: '.$id.' is '.$age.' years old.'.PHP_EOL;
}

/*
 * 1.Order by Age
You will receive an unknown number of lines. On each line, you will receive array with 3 elements. The first element will be а string and represents the name of the person. The second element will be a string and will represent the ID of the person. The last element will be an integer and represents the age of the person.
When you receive the command "End", stop receiving input and print all the people, ordered by age. 
Examples
Input	Output
Georgi 123456 20
Pesho 78911 15
Stefan 524244 10
End	

Output:
Stefan with ID: 524244 is 10 years old.
Pesho with ID: 78911 is 15 years old.
Georgi with ID: 123456 is 20 years old.
 */