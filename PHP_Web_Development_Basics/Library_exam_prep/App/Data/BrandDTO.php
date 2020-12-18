<?php

namespace App\Data;


class BrandDTO
{
    private $id;
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return BrandDTO
     */
    public function setId($id): BrandDTO
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return BrandDTO
     */
    public function setName($name): BrandDTO
    {
        $this->name = $name;

        return $this;
    }



}