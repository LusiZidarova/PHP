<?php
class Citizen implements Person,Birthable
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
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $birthDate;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     * @param string $id
     * @param string $birthDate
     */
    public function __construct(string $name, int $age, string $id, string $birthDate)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthdate($birthDate);
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

    public function setId(string $id): void
    {
       $this->id=$id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }


    public function setBirthdate(string $birthDate): void
    {
        $this->birthDate=$birthDate;
    }

    /**
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    public function __toString()
    {
        return $this->getName().PHP_EOL.$this->getAge().PHP_EOL.$this->getId().PHP_EOL.$this->getBirthDate();
    }
}