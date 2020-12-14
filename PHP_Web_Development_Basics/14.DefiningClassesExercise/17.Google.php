<?php
class Person
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var Company
     */
    private $company;
    /**
     * @var Car
     */
    private $car;
    /**
     * @var Parents[]
     */
    private $parents;
    /**
     * @var Children[]
     */
    private $children;
    /**
     * @var Pokemon[]
     */
    private  $pokemon;

    /**
     * Person constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->company=null;
        $this->car = null;
        $this->parents=[];
        $this->children=[];
        $this->pokemon=[];

    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return  Company
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * @param Company $company
     */
    public function insertCompany(Company $company): void
    {
            $this->company = $company;

    }

    /**
     * @return Car
     */
    public function getCar()
    {
        return $this->car;
    }
    public function insertCar(Car $car):void
    {
        $this->car = $car;
    }
    /**
     * @return Children[]
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    /**
     * @param Children $child
     */
    Public function insertChild(Children $child):void
    {
        $this->children[]=$child;
    }
    /**
     * @return Pokemon[]
     */
    public function getPokemon(): array
    {
        return $this->pokemon;
    }

    /**
     * @param Pokemon $pokemon
     */
    public function insertPokemon(Pokemon $pokemon):void
    {
        $this -> pokemon[]=$pokemon;
    }
    /**
     * @return Parents[]
     */
    public function getParents(): array
    {
        return $this->parents;
    }
    /**
     * @param Parents $parent
     */
    public function insertParents(Parents $parent):void
    {
        $this->parents[]=$parent;
    }

    public function __toString()
    {
        $output = $this->getName().PHP_EOL;
        $output.= "Company: ".PHP_EOL;
     if($this->company ){
         $output.= $this->getCompany()->getCompanyName()." ".$this->getCompany()->getDepartment()." ".number_format($this->getCompany()->getSalary(),2).PHP_EOL;
     }
     $output.= "Car: ".PHP_EOL;
     $output.= $this->getCar()->getModel()." ".$this->getCar()->getSpeed().PHP_EOL;
     $output.="Pokemon: ".PHP_EOL;
     if(count($this->getPokemon()) >0){
         foreach($this->getPokemon() as $pokemon){
             $output .= $pokemon->getPokemonName()." ".$pokemon->getPokemonType().PHP_EOL;
         }
     }
     $output .= "Parents:".PHP_EOL;
        if(count($this->getParents()) >0){
            foreach($this->getParents() as $parent){
                $output .= $parent->getParentName()." ".$parent->getParentBirthday().PHP_EOL;
            }
        }
        $output.= "Children: ".PHP_EOL;
        if(count($this->getChildren()) >0){
            foreach($this->getChildren() as $child){
                $output .= $child->getChildName()." ".$child->getChildBirthday().PHP_EOL;
            }
        }

     return $output;
    }
}
class Company
{
    /**
     * @var string
     */
    private $companyName;
    /**
     * @var string
     */
    private $department;
    /**
     * @var float
     */
    private $salary;

    /**
     * Company constructor.
     * @param string $companyName
     * @param string $department
     * @param float $salary
     */
    public function __construct(string $companyName, string $department, float $salary)
    {
        $this->companyName = $companyName;
        $this->department = $department;
        $this->salary = $salary;
    }

    /**
     * @return string
     */
    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    /**
     * @return string
     */
    public function getDepartment(): string
    {
        return $this->department;
    }

    /**
     * @return float
     */
    public function getSalary(): float
    {
        return $this->salary;
    }
}
class  Car
{
    /**
     * @var string
     */
    private $model;
    /**
     * @var int
     */
    private $speed;

    /**
     * Car constructor.
     * @param string $model
     * @param int $speed
     */
    public function __construct(string $model, int $speed)
    {
        $this->model = $model;
        $this->speed = $speed;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }
}
class Parents
{
    /**
     * @var string
     */
    private $parentName;
    /**
     * @var string
     */
    private $parentBirthday;

    /**
     * Parents constructor.
     * @param string $parentName
     * @param string $parentBirthday
     */
    public function __construct(string $parentName, string $parentBirthday)
    {
        $this->parentName = $parentName;
        $this->parentBirthday = $parentBirthday;
    }

    /**
     * @return string
     */
    public function getParentName(): string
    {
        return $this->parentName;
    }

    /**
     * @return string
     */
    public function getParentBirthday(): string
    {
        return $this->parentBirthday;
    }
}
class Children
{
    /**
     * @var string
     */
    private $childName;
    /**
     * @var string
     */
    private $childBirthday;

    /**
     * Children constructor.
     * @param string $childName
     * @param string $childBirthday
     */
    public function __construct(string $childName, string $childBirthday)
    {
        $this->childName = $childName;
        $this->childBirthday = $childBirthday;
    }

    /**
     * @return string
     */
    public function getChildName(): string
    {
        return $this->childName;
    }

    /**
     * @return string
     */
    public function getChildBirthday(): string
    {
        return $this->childBirthday;
    }
}
class Pokemon
{
    /**
     * @var string
     */
    private $pokemonName;
    /**
     * @var string
     */
    private $pokemonType;

    /**
     * Pokemon constructor.
     * @param string $pokemonName
     * @param string $pokemonType
     */
    public function __construct(string $pokemonName, string $pokemonType)
    {
        $this->pokemonName = $pokemonName;
        $this->pokemonType = $pokemonType;
    }

    /**
     * @return string
     */
    public function getPokemonName(): string
    {
        return $this->pokemonName;
    }

    /**
     * @return string
     */
    public function getPokemonType(): string
    {
        return $this->pokemonType;
    }
}

/**
 * @var Person $person
 */
$people = [];

$line = readline();
while($line != 'End'){
    $commands = explode(" ",$line);
    $personName = $commands[0];
    if(!array_key_exists($personName,$people)){
        $people[$personName] = new Person($personName);
    }
    $person = $people[$personName];
    switch ($commands[1]){
        case "company":
            $companyName = $commands[2];
            $department = $commands[3];
            $salary=floatval($commands[4]);
            $person ->insertCompany(new Company($companyName,$department,$salary));
            break;
        case "car":
            $carModel = $commands[2];
            $carSpeed = intval($commands[3]);
            $person ->insertCar(new Car($carModel,$carSpeed));
            break;
        case "pokemon":
            $pokemonName = $commands[2];
            $pokemonType = $commands[3];
            $person->insertPokemon(new Pokemon($pokemonName,$pokemonType));
            break;
        case "parents":
            $parentName = $commands[2];
            $parentBirthday = $commands[3];
            $person -> insertParents(new Parents($parentName,$parentBirthday));
            break;
        case "children":
            $childName = $commands[2];
            $childBirthday = $commands[3];
            $person -> insertChild(new Children($childName,$childBirthday));
            break;
    }
    $line = readline();
}
$personName = readline();
if(array_key_exists($personName,$people)){
    $person = $people[$personName];
    echo $person;
}

print_r($people);
/*

17.Google - 80/100
Google is always watching you, so it should come as no surprise that they know everything about you (even your pokemon collection),
 since you’re really good at writing classes Google asked you to design a Class that can hold all the information they need for people.
From the console you will receive an unkown amount of lines until the command “End” is
 read, on each of those lines there will be
information about a person in one of the following formats:
⦁	“<Name> company <companyName> <department> <salary>”
⦁	“<Name> pokemon <pokemonName> <pokemonType>”
⦁	“<Name> parents <parentName> <parentBirthday>”
⦁	“<Name> children <childName> <childBirthday>”
⦁	“<Name> car <carModel> <carSpeed>”
You should structure all information about a person in a class with nested subclasses. People’s names are unique - there won’t be
 2 people with the same name, a person can also have only 1 company and car, but can have multiple parents, chidlren and pokemon.
After the command “End” is received on the next line you will receive a single name, you should print all information about that person.
Note that information can change during the input, for instance if we receive multiple lines which specify a person’s company,
only the last one should be the one remembered. The salary must be formated to two decimal places after the seperator.
Input
PeshoPeshev company PeshInc Management 1000.00
TonchoTonchev car Trabant 30
PeshoPeshev pokemon Pikachu Electricity
PeshoPeshev parents PoshoPeshev 22/02/1920
TonchoTonchev pokemon Electrode Electricity
End
TonchoTonchev

Output

TonchoTonchev
Company:
Car:
Trabant 30
Pokemon:
Electrode Electricity
Parents:
Children:

Input
JelioJelev pokemon Onyx Rock
JelioJelev parents JeleJelev 13/03/1933
GoshoGoshev pokemon Moltres Fire
JelioJelev company JeleInc Jelior 777.77
JelioJelev children PudingJelev 01/01/2001
StamatStamatov pokemon Blastoise Water
JelioJelev car AudiA4 180
JelioJelev pokemon Charizard Fire
End
JelioJelev

Output

JelioJelev
Company:
JeleInc Jelior 777.77
Car:
AudiA4 180
Pokemon:
Onyx Rock
Charizard Fire
Parents:
JeleJelev 13/03/1933
Children:
PudingJelev 01/01/2001
 */