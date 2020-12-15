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
        $id = readline();
        $bithDate = readline();


        $citizen = new Citizen($name,$age,$id,$bithDate);
        echo $citizen;
    }

}
$main = new Main();
$main ->run();

/*
 * 2.Multiple Implementation -  100/100
Using the code from the previous task, define an interface Identifiable with a method setId(). In the class it will set a property called Id which is string.
Define an interface Birthable with a method setBirthdate(). In the class it will set a property birthDate which is string.
Implement setId() and setBirthdate() in the Citizen class. Rewrite the Citizen constructor to accept the new parameters. Rewrite __toString() to output the persons Id and date of birth.
Examples
Input	Output
Peter
25
7706126789
12.06.1977	Peter
25
7706126789
12.06.1977


 */