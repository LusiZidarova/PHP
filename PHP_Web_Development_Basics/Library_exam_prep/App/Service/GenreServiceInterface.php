<?php

namespace App\Service;

use App\Data\BrandDTO;

interface GenreServiceInterface
{

    /**
     * @return \Generator|BrandDTO[]
     */
    public function getAll() : \Generator;
}