<?php

class Number{
    private $value;
    private $lastDigitName;
    
    public function __construct(int $value) {
        $this->value=$value;
        $this->lastDigitName = null;
    }
    public function getLastDigit()
    {
        if(null !== $this->lastDigitName){
            return $this->lastDigitName;
        }
        $lastDigit= $this->value % 10;
        switch($lastDigit){
            case '1':
                $this->lastDigitName = 'one';
                break;
            case '2':
                $this->lastDigitName = 'two';
                break;
            case '3':
                $this->lastDigitName = 'three';
                break;
            case '4':
                $this->lastDigitName = 'four';
                break;
            case '5':
                $this->lastDigitName = 'five';
                break;
            case '6':
                $this->lastDigitName = 'six';
                break;
            case '7':
                $this->lastDigitName = 'seven';
                break;
            case '8':
                $this->lastDigitName = 'eight';
                break;
            case '9':
                $this->lastDigitName =  'nine';
                break;
            default :
                $this->lastDigitName =  'zero'; 
                break;
        }
        return $this->lastDigitName;
    }
}
$digit=new Number(readline());

echo $digit->getLastDigit();


 /*
  * 
  * Problem 9. Last Digit Name
Write a class Number that will hold an integer number. Write a method in the class that returns the English name of
the last digit of the given number. Write a program that reads an integer and prints the returned value from this
method.
Examples
Input  Output   Input   Output
1024   four     512     two
  */
