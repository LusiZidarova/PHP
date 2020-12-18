<?php

namespace App\Repository;


use App\Data\EditOfferDTO;
use App\Data\FullOfferDTO;
use App\Data\OfferDTO;
use App\Data\MyOfferDTO;

interface BookRepositoryInterface
{
    public function add(OfferDTO $book);

    /**
     * @param int $userId
     * @return MyOfferDTO[]\Generator
     */
    public function findByUserId(int $userId): \Generator;

    /**
     * @return FullOfferDTO[]|\Generator
     */
    public function findAll(): \Generator;

    public function findOne(int $id): FullOfferDTO;

    public function edit(EditOfferDTO $course);

    public function delete(int $id);
}