<?php

namespace App\Repository;


use App\Data\BrandDTO;
use Database\DatabaseInterface;

class GenreRepository implements GenreRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * GenreRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }


    /**
     * @return \Generator|BrandDTO[]
     */
    public function findAll(): \Generator
    {
        return $this->db->query("SELECT id, name FROM genres ORDER BY id")
            ->execute()
            ->fetch(BrandDTO::class);
    }
}