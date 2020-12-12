<?php
 class DecimalNumber
 {
     /*
      * var string
      */
     private $value;
     
     public function __construct($value) {
         $this->value=$value;
     }
     
     public function printReversed(){
         for ($i = strlen($this->value)-1; $i >= 0; $i--) {
             echo $this->value[$i];
         }
         echo PHP_EOL;
     }
 }
 $num = new DecimalNumber(readline());
 $num ->printReversed();


 /*
  * 
  * Problem 10. Number in Reversed Order
  * Write a class DecimalNumber that has a method that prints all its digits in reversed order.
Examples
Input   Output              Input       Output
256     652                 1.12        21.1
  */
