<?php

namespace App\Service;


use App\Data\BrandDTO;
use App\Repository\GenreRepositoryInterface;

class GenreService implements GenreServiceInterface
{
    /**
     * @var GenreRepositoryInterface
     */
    private $genreRepository;

    public function __construct(GenreRepositoryInterface $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }


    /**
     * @return \Generator|BrandDTO[]
     */
    public function getAll(): \Generator
    {
        return $this->genreRepository->findAll();
    }
}