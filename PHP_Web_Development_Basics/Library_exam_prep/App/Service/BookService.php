<?php

namespace App\Service;


use App\Data\EditOfferDTO;
use App\Data\FullOfferDTO;
use App\Data\OfferDTO;
use App\Data\MyOfferDTO;
use App\Repository\BookRepositoryInterface;

class BookService implements BookServiceInterface
{
    /**
     * @var BookRepositoryInterface
     */
    private $bookRepository;

    /**
     * BookService constructor.
     * @param BookRepositoryInterface $bookRepository
     */
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }


    public function create(OfferDTO $book)
    {
        $this->bookRepository->add($book);
    }

    /**
     * @param int $userId
     * @return MyOfferDTO[]|\Generator
     */
    public function getByUserId(int $userId): \Generator
    {
        return $this->bookRepository->findByUserId($userId);
    }

    /**
     * @return FullOfferDTO[]|\Generator
     */
    public function getAll(): \Generator
    {
        return $this->bookRepository->findAll();
    }

    /**
     * @param EditOfferDTO $book
     * @param int $userId
     * @throws \Exception
     */
    public function edit(EditOfferDTO $book, int $userId)
    {
       $books = $this->bookRepository->findByUserId($userId);
       $hasBook = false;
       foreach ($books as $userBook) {
           if ($userBook->getId() == $book->getId()) {
               $hasBook = true;
               break;
           }
       }

       if (!$hasBook) {
           throw new \Exception('Not an owner');
       }

       $this->bookRepository->edit($book);
    }

    public function getOne(int $id): FullOfferDTO
    {
        return $this->bookRepository->findOne($id);
    }

    /**
     * @param int $bookId
     * @param int $userId
     * @throws \Exception
     */
    public function delete(int $bookId, int $userId)
    {

        $book = $this->getOne($bookId);

        if ($book->getUserId() != $userId) {
            throw new \Exception('Not an owner');
        }

        $this->bookRepository->delete($bookId);
    }
}