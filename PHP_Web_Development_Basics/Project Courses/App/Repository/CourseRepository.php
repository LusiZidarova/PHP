<?php

namespace App\Repository;


use App\Data\EditCourseDTO;
use App\Data\FullCourseDTO;
use App\Data\CourseDTO;
use App\Data\MyCourseDTO;
use Database\DatabaseInterface;

class CourseRepository implements CourseRepositoryInterface
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

    /**
     * @param CourseDTO $course
     */
    public function add(CourseDTO $course)
    {
        $this->db->query("INSERT INTO 
        courses (name, image_url, description, technology_id, user_id) 
        VALUES (?, ?, ?, ?, ?)")
            ->execute([$course->geName(),
                       $course->getImage(),
                       $course->getDescription(),
                       $course->getTechologyId(),
                       $course->getUserId()

            ]);
    }

    /**
     * @param int $userId
     * @return MyCourseDTO[]\Generator
     */
    public function findByUserId(int $userId): \Generator
    {
        return $this->db->query("
            SELECT 
                c.id,
                i.name,
                c.name AS category,
                i.price
            FROM items AS i 
            JOIN categories c on i.category_id = c.id
            WHERE i.user_id = ?
            ORDER BY 
              c.id ASC,
              i.price DESC
        ")->execute([$userId])
            ->fetch(MyItemDTO::class);
    }

    /**
     * @return FullItemDTO[]|\Generator
     */
    public function findAll(): \Generator
    {
        return $this->db->query(
            "SELECT
                    i.id,
                    i.title,
                    c.name AS category,
                    i.price,
                    u.username,
                    u.location,
                    u.phone,
                    i.description,
                    i.image,
                    i.user_id AS userId,
                    i.category_id as categoryId
                   FROM
                    items i
                    JOIN categories c on i.category_id = c.id
                    JOIN users u on i.user_id = u.id
                    ORDER BY location DESC,
                    c.id ASC,
                    i.price ASC
            "
        )->execute()->fetch(FullItemDTO::class);
    }

    public function edit(EditCourseDTO $course)
    {
        $this->db->query(
            "UPDATE cources SET
            title = ?,
            description = ?,
            price = ?,
            category_id = ?,
            image = ?
            WHERE id = ?"
        )->execute([
            $item->getTitle(),
            $item->getDescription(),
            $item->getPrice(),
            $item->getCategoryId(),
            $item->getImage(),
            $item->getId()
        ]);
    }

    public function findOne(int $id): FullCourseDTO
    {
        return $this->db->query(
            "SELECT
                    i.id,
                    i.title,
                    c.name AS category,
                    i.price,
                    u.username,
                    u.location,
                    u.phone,
                    i.description,
                    i.image,
                    i.user_id AS userId,
                    i.category_id as categoryId
                   FROM
                    items i
                    JOIN categories c on i.category_id = c.id
                    JOIN users u on i.user_id = u.id
                    WHERE i.id = ?"
        )->execute([$id])->fetchOne(FullCourseDTO::class);
    }

    public function delete(int $id)
    {
        $this->db->query("DELETE FROM courses WHERE id = ?")->execute([$id]);
    }
}