<?php
class Trainer
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $badjes;
    /**
     * @var Pokemon[][]
     */
    private $pokemons;

    /**
     * Trainer constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
        $this->badjes=0;
        $this->pokemons=[];
    }

    /**
     * @return int
     */
    public function getBadjes(): int
    {
        return $this->badjes;
    }


    public function  catchPokemon(Pokemon $pokemon):void
    {
        $this->pokemons[$pokemon->getElement()][] = $pokemon;
    }
    public function receiveBadje():void
    {
        $this->badjes++;
    }
    public function hasPokemonsByElement(string $element):bool
    {
        return key_exists($element,$this->pokemons) && count($this->pokemons[$element] ) >0;
    }
    public function  hitPokemons(int $dmg):void
    {
        foreach ($this->pokemons as $type => $pokemonsByType)
        {
            foreach ($pokemonsByType as $key => $pokemon) {
                $pokemon->hit($dmg);
                if(!$pokemon->isAlive()){
                   unset($this->pokemons[$type][$key]);
                }
            }
        }
    }

    public function __toString()
    {
       $pokemonCount =0;
       foreach ($this->pokemons as $pokemonsByType){
           $pokemonCount += count($pokemonsByType);
       }
       return $this->name.' '.$this->badjes.' '.$pokemonCount;
    }
}
class  Pokemon
{
    /**
     * @var string
     */

    private $name;
    /**
     * @var string
     */
    private $element;
    /**
     * @var int
     */
    private $health;

    /**
     * Pokemon constructor.
     * @param string $name
     * @param string $element
     * @param int $health
     */
    public function __construct(string $name, string $element, int $health)
    {
        $this->name = $name;
        $this->element = $element;
        $this->health = $health;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getElement(): string
    {
        return $this->element;
    }

    /**
     * @return int
     */
    public function getHealth(): int
    {
        return $this->health;
    }

    public function isAlive():bool
    {
        return $this->getHealth() >0;
    }
    public function hit(int $dmg):void
    {
        $this->health-= max(0, $dmg);
    }
}

/**
 * @var Trainer[] $trainers
 */
$trainers = [];

$line = readline();

while($line != 'Tournament')
{
    list($trainerName,$pokemonName,$element,$health) = explode(' ',$line);
    if(!key_exists($trainerName,$trainers)){
        $trainers[$trainerName] = new Trainer($trainerName);
    }
    $trainer = $trainers[$trainerName];
    $trainer ->catchPokemon(new Pokemon($pokemonName,$element,$health));

    $line = readline();
}
$line = readline();
while($line != 'End'){
    foreach ($trainers as $trainer){

        if($trainer->hasPokemonsByElement($line)){
            $trainer->receiveBadje();
        }else{
            $trainer->hitPokemons(10);
        }
    }
    $line = readline();
}
uksort($trainers,function ($key1,$key2) use ($trainers){
   $trainer1 = $trainers[$key1];
   $trainer2 = $trainers[$key2];

   return $trainer2->getBadjes()<=> $trainer1->getBadjes();

});
echo implode(PHP_EOL,$trainers);
/*
 * 16.Pokemon Trainer - 100/100
You wanna be the very best pokemon trainer, like no one ever was, so you set out to catch pokemon.
Define a class Trainer and a class Pokemon. Trainers have a name, number of badges and a collection
of pokemon, Pokemon have a name, an element and health, all values are mandatory. Every Trainer
starts with 0 badges.
From the console you will receive an unknown number of lines until you receive the command
“Tournament”, each line will carry information about a pokemon and the trainer who caught it
in the format “<TrainerName> <PokemonName> <PokemonElement> <PokemonHealth>” where TrainerName
 is the name of the Trainer who caught the pokemon, names are unique there cannot be 2 trainers
 with the same name. After receiving the command “Tournament” an unknown number of lines
containing one of three elements “Fire”, “Water”, “Electricity” will follow until the command
“End” is received. For every command you must check if a trainer has atleast 1 pokemon with
the given element, if he does he receives 1 badge, otherwise all his pokemon lose 10 health,
if a pokemon falls to 0 or less health he dies and must be deleted from the trainer’s
collection. After the command “End” is received you should print all trainers sorted by the
 amount of badges they have in descending order (if two trainers have the same amount of badges
 they should be sorted by order of appearance in the input) in the format “<TrainerName> <Badges> <NumberOfPokemon>”.

Examples

Input

Pesho Charizard Fire 100
Gosho Squirtle Water 38
Pesho Pikachu Electricity 10
Tournament
Fire
Electricity
End

Output
Pesho 2 2
Gosho 0 1

Input
Stamat Blastoise Water 18
Nasko Pikachu Electricity 22
Jicata Kadabra Psychic 90
Tournament
Fire
Electricity
Fire
End

Output
Nasko 1 1
Stamat 0 0
Jicata 0 1
 */