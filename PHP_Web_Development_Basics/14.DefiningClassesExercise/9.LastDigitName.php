<?php
class Number{
    /**
     * @var int
     */
    private $value;

    /**
     * Number constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }



    public function getLastDigitName(): string
    {
        $lastDigit = $this->value %10;
        switch ($lastDigit){
            case 0: return  "zero";
                break;
            case 1: return  "one";
                break;
            case 2: return  "two";
                break;
            case 3: return  "three";
                break;
            case 4: return  "four";
                break;
            case 5: return  "five";
                break;
            case 6: return  "six";
                break;
            case 7: return  "seven";
                break;
            case 8: return  "eight";
                break;
            default: return  "nine";
                break;
        }
    }
}
$num = new Number(intval(readline()));
echo $num->getLastDigitName();

/*
 * Problem 01. Last Digit Name
Write a class Number that will hold an integer number. Write a method in the class that returns the English name of
the last digit of the given number. Write a program that reads an integer and prints the returned value from this
method.
Examples
Input   Output   Input     Output
1024   four      512       two
*/
