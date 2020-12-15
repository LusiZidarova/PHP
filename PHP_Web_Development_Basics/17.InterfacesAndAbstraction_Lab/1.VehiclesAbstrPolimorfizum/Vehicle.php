<?php
abstract class Vehicle
{
    /**
     * @var int
     */
    protected $fuel;
    /**
     * @var float
     */
    protected $consumption;

    protected $last_status;

    /**
     * Vehicle constructor.
     * @param int $fuel
     * @param float $consumption
     */
    public function __construct(int $fuel, float $consumption)
    {
        $this->fuel = $fuel;
        $this->consumption = $consumption;
    }

    /**
     * @return mixed
     */
    public function getLastStatus()
    {
        return $this->last_status;
    }


    /**
     * @param int $distance
     * @return float|int
     */
    public  function drive(int $distance){
       $range = $this->fuel/$this->getConsumption();
       if($distance > $range){
           $this->last_status ="needs refueling\n";
           return false;
       }
       $this->last_status="travelled ".$range." km\n";
       return true;
    }
    public function refuel(int $fuel)
    {
      $this->fuel += $fuel;
      $this->last_status=$this->getFuel() + $fuel;
    }
    public abstract function getConsumption();


}

class Car extends Vehicle
{
    public function getConsumption()
    {
        return $this->consumption+0.9;
    }

}
class Truck extends Vehicle
{
    public function getConsumption()
    {
        return $this->consumption +1.6;
    }
    protected function getFuel(){
        return $this->fuel*0.95;
    }
}
class Main {
    private $vehicle =[];

    /**
     * @throws Exception
     */
    public function readData(){

        while ($line = readline("Type vehicle:")){
            if ($line === ''){
                break;
            }

            list($type,$fuel,$consumption) = explode(" ",$line);

            if(!class_exists($type)){
                throw  new Exception("Not  valid type");
            }
            if(isset($this->vehicle[$type])){
                echo "This type alrready exists";
                continue;
            }
            $this->vehicle[$type]=new $type($fuel,$consumption);

        }
    }

    /**
     * @throws Exception
     */
    public function printData(){
        while ($line = readline("Type operation:")) {
            if ($line === '') {
                break;
            }
            list($operation,$type,$data) = explode(" ",$line);

            if(!isset($this->vehicle[$type])){
                throw new Exception("Non valid type");
            }
            if(!is_callable([$this->vehicle[$type],])){
                throw new Exception("Non valid operation\n");
           }
             $this->vehicle[$type]->$operation[$data];
            echo  $this->vehicle[$type]->getLastStatus();
        }
    }

    public function finishData(){
        try {
            $this->printData();
            echo $this->vehicle.": ".$this->vehicle[$type]->getFuel();
        }catch (Exception $ex){
            echo $ex->getMessage();
        }


    }

}
/*
 * Problem 1. Vehicles
Write a program that models 2 vehicles (Car and Truck) and will be able to simulate driving and refueling them. Car
and truck both have fuel quantity, fuel consumption in liters per km and can be driven given distance and refueled
with given liters. But in the summer both vehicles use air conditioner and their fuel consumption per km is
increased by 0.9 liters for the car and with 1.6 liters for the truck. Also the truck has a tiny hole in his tank and when
it gets refueled it gets only 95% of given fuel. The car has no problems when refueling and adds all given fuel to its
tank. If vehicle cannot travel given distance its fuel does not change.

Input
 On the first line - information about the car in format {Car {fuel quantity} {liters per km}}
 On the second line – info about the truck in format {Truck {fuel quantity} {liters per km}}
 On third line - number of commands N that will be given on the next N lines
 On the next N lines – commands in format
o Drive Car {distance}
o Drive Truck {distance}
o Refuel Car {liters}
o Refuel Truck {liters}
Output
After each Drive command print whether the Car/Truck was able to travel given distance in format if it’s successful.
Print the distance with all digits after the decimal separator except trailing zeros.
Car/Truck travelled {distance} km
Or if it is not:
Car/Truck needs refueling
Finally print the remaining fuel for both car and truck rounded 2 digits after floating point in format:
Car: {liters}
Truck: {liters}

Example
Input Output

Car 15 0.3
Truck 100 0.9
4
Drive Car 9
Drive Car 30
Refuel Car 50
Drive Truck 10

Output
Car travelled 9 km
Car needs refueling
Truck travelled 10 km
Car: 54.20
Truck: 75.00

Input
Car 30.4 0.4 Car needs refueling
Truck 99.34 0.9
5
Drive Car 500
Drive Car 13.5
Refuel Truck 10.300
Drive Truck 56.2
Refuel Car 100.2

Output
Car travelled 13.5 km
Truck needs refueling
Car: 113.05
Truck: 109.13
 */