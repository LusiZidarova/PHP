<?php


class Citizen implements Person
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var int
     */
    private $age;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     */
    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name=$name;
    }

    /**
     * @param int $age
     */

    public function setAge(int $age): void
    {
        $this->age=$age;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
    public function __toString()
    {
        return $this->getName().PHP_EOL.$this->getAge();
    }


}