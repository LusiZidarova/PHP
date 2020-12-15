<?php
spl_autoload_register();

class Main
{
    const  INPUT_END_COMMAND = "End";

    public function run(){
        $this->readData();
    }
    public function readData()
    {
        $input = readline();

        while($input !== self::INPUT_END_COMMAND){
            $animalData = explode(" ",$input);
            $animal = AnimalFactory::create($animalData);

            $foodData = explode(" ",readline());
            $foodType = $foodData[0];
            $foodQuantity = intval($foodData[1]);
            $food = FoodFactory::create($foodType,$foodQuantity);

            $animal->makeSound();

            try {
                $animal->eat($food);

            }catch (Exception $ex){
                echo $ex->getMessage();
            }

            echo $animal;
            $input = readline();
        }
    }
}
$main = new Main();
$main->run();
/*
 * ⦁	Poblem 3. Wild Farm Hierarchy
Your task is to create a class hierarchy like the picture below. All the classes except Vegetable, Meat, Mouse, Tiger, Cat & Zebra should be abstract.
Input should be read from the console. Every even line will contain information about the Animal in following format:
{AnimalType} {AnimalName} {AnimalWeight} {AnimalLivingRegion} [{CatBreed} = Only if its cat]
On the odd lines you will receive information about the food that you should give to the Animal. The line will consist of FoodType and quantity separated by a whitespace.

You should build the logic to determine if the animal is going to eat the provided food. The Mouse and Zebra should check if the food is a Vegetable. If it is they will eat it. Otherwise you should print a message in the format:
{AnimalType} are not eating that type of food!

Cats eat any kind of food, but Tigers accept only Meat. If Vegetable is provided to a tiger message like the one above should be printed on the console.

{AnimalType} [{AnimalName}, {CatBreed}, {AnimalWeight}, {AnimalLivingRegion}, {FoodEaten}]

Print all AnimalWeight with no trailing zeroes after the decimal separator.
After you read information about the Animal and Food then invoke makeSound method of the current animal and then feed it. At the end print the whole object and proceed reading information about the next animal/food. The input will continue until you receive “End” for animal information.

Input	Output
Cat Gray 1.1 Home Persian
Vegetable 4
End
Output
Meowwww
Cat[Gray, Persian, 1.1, Home, 4]

Input
Tiger Typcho 167.7 Asia
Vegetable 1
End	ROAAR!!!
Tigers are not eating that type of food!
Tiger[Typcho, 167.7, Asia, 0]
Zebra Doncho 500 Africa
Vegetable 150
End

Output
Zs
Zebra[Doncho, 500, Africa, 150]

Input
Mouse Jerry 0.5 Anywhere
Vegetable 2
End
Output
SQUEEEAAAK!
 Mouse[Jerry, 0.5, Anywhere, 0]

 */