<?php

namespace App\Service;


use App\Data\EditOfferDTO;
use App\Data\FullOfferDTO;
use App\Data\OfferDTO;
use App\Data\MyOfferDTO;

interface BookServiceInterface
{
    public function create(OfferDTO $book);

    /**
     * @param int $userId
     * @return MyOfferDTO[]|\Generator
     */
    public function getByUserId(int $userId): \Generator;

    /**
     * @return FullOfferDTO[]|\Generator
     */
    public function getAll(): \Generator;

    public function getOne(int $id): FullOfferDTO;

    public function edit(EditOfferDTO $book, int $userId);

    public function delete(int $bookId, int $userId);

}