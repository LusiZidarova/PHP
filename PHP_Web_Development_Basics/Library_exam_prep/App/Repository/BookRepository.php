<?php

namespace App\Repository;


use App\Data\EditOfferDTO;
use App\Data\FullOfferDTO;
use App\Data\OfferDTO;
use App\Data\MyOfferDTO;
use Database\DatabaseInterface;

class BookRepository implements BookRepositoryInterface
{
    /**
     * @var DatabaseInterface
     */
    private $db;

    /**
     * ItemRepository constructor.
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }


    public function add(OfferDTO $book)
    {
        $this->db->query("INSERT INTO 
        books (title, author, description,image, genre_id, user_id) 
        VALUES (?, ?, ?, ?, ?,?)")
            ->execute([$book->getTitle(),
                       $book->getAuthor(),
                       $book->getDescription(),
                       $book->getImage(),
                       $book->getGenreId(),
                       $book->getUserId()
            ]);

    }

    /**
     * @param int $userId
     * @return MyOfferDTO[]| \Generator
     */
    public function findByUserId(int $userId): \Generator
    {
        return $this->db->query("
	            SELECT 
	                   b.id,
	                   b.title,
	                   b.author,
	                   g.name as genre
                FROM books as b 
	            JOIN genres g on b.genre_id = g.id
            WHERE b.user_id = ?
            ORDER BY 
              b.title 
           

        ")->execute([$userId])
            ->fetch(MyOfferDTO::class);
    }

    /**
     * @return FullOfferDTO[]|\Generator
     */
    public function findAll(): \Generator
    {
        return $this->db->query(
            "SELECT
                    b.id,
                    b.title,
                    b.author,
                    b.description,
                    g.name AS genre,
                    u.username ,
                    b.genre_id as genreId,
                    b.user_id as userId
                   FROM
                    books b
                    JOIN genres g on b.genre_id = g.id
                    JOIN users u on b.user_id = u.id
                    ORDER BY b.title
            "
        )->execute()->fetch(FullOfferDTO::class);
    }

    public function edit(EditOfferDTO $book)
    {
        $this->db->query(
            "UPDATE books SET
            title = ?,
            author =?,
            description = ?,
            image =?,
            genre_id = ?,
            user_id = ?
            WHERE id = ?"
        )->execute([
            $book->getTitle(),
            $book->getAuthor(),
            $book->getDescription(),
            $book->getImage(),
            $book->getGenreId(),
            $book->getUserId(),
            $book->getId()
        ]);
    }

    public function findOne(int $id): FullOfferDTO
    {
        return $this->db->query(
            "SELECT
                    b.id,
                    b.title,
                    b.author,
                    g.name AS genre,
                    b.image,
                    b.description,
                    b.genre_id as genreId,
                    b.user_id as userId
       
                   FROM
                    books b
                    JOIN genres g on b.genre_id = g.id
                    JOIN users u on b.user_id = u.id
                    WHERE b.id = ?"
        )->execute([$id])->fetchOne(FullOfferDTO::class);
    }

    public function delete(int $id)
    {
        $this->db->query("DELETE FROM books WHERE id = ?")->execute([$id]);
    }
}