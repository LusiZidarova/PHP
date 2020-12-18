<?php

namespace App\Repository;


use App\Data\BrandDTO;

interface GenreRepositoryInterface
{
    /**
     * @return \Generator|BrandDTO[]
     */
    public function findAll() : \Generator;
}