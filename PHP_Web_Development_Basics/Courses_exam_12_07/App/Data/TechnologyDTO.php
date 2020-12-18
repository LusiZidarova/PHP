<?php

namespace App\Data;


class TechnologyDTO
{
    private $id;
    private $name;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return TechnologyDTO
     */
    public function setId($id): TechnologyDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return TechnologyDTO
     */
    public function setName($name): TechnologyDTO
    {
        $this->name = $name;

        return $this;
    }



}