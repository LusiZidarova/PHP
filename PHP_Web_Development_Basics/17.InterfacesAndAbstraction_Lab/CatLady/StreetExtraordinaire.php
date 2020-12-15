<?php

class StreetExtraordinaire extends Cat
{
    /**
     * @var int
     */
private $decibleOfMeows;

    /**
     * StreetExtraordinaire constructor.
     * @param int $decibleOfMeows
     */
    public function __construct(string $breed,string $name,int $decibleOfMeows)
    {
        parent::__construct($breed,$name);
        $this->setDecibleOfMeows($decibleOfMeows);
    }


    /**
     * @return int
     */
    public function getDecibleOfMeows(): int
    {
        return $this->decibleOfMeows;
    }

    /**
     * @param int $decibleOfMeows
     */
    private function setDecibleOfMeows(int $decibleOfMeows): void
    {
        $this->decibleOfMeows = $decibleOfMeows;
    }
    public function __toString()
    {
       return parent::__toString()." ".$this->getDecibleOfMeows();
    }
}