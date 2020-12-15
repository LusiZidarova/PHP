<?php
spl_autoload_register();
class Siamese extends Cat
{
    /**
     * @var int
     */
    private $earSize;

    /**
     * Siamese constructor.
     * @param int $earSize
     */
    public function __construct(string $breed,string $name,int $earSize)
    {

        parent::__construct($breed,$name);
        $this->setEarSize($earSize);
    }


    /**
     * @return int
     */
    public function getEarSize(): int
    {
        return $this->earSize;
    }

    /**
     * @param int $earSize
     */
    private function setEarSize(int $earSize): void
    {
        $this->earSize = $earSize;
    }
    public function __toString()
    {
        return parent::__toString()." ".$this->getEarSize().PHP_EOL;

    }


}