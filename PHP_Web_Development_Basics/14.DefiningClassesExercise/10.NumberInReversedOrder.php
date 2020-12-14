<?php
class ReverseNumber{
    /**
     * @var string
     */
    private $value;
    private $reversed;

    /**
     * ReverseNumber constructor.
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this->value = $value;
        $this->reversed=null;
    }
    public function printReversed():void{
       if($this->reversed !==null){
           echo $this->reversed;
       }else{
           echo $this->reversed= strrev($this->value).PHP_EOL;
       }
    }
}
$n = readline();
$num = new ReverseNumber($n);
$num->printReversed();

/*
 * Problem 02. Number in Reversed Order
Write a class DecimalNumber that has a method that prints all its digits in reversed order.
Examples
Input   Output    Input    Output
256     652       1.12     21.1
*/
