<?php

namespace App\Data;


class EditOfferDTO extends OfferDTO
{
    private $genries;

    /**
     * @return BrandDTO[]|\Generator
     */
    public function getGenries():\Generator
    {
        return $this->genries;
    }

    /**
     * @param mixed $genries
     */
    public function setGenries($genries): void
    {
        $this->genries = $genries;
    }






}