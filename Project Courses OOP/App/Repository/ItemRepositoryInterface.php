<?php

namespace App\Repository;


use App\Data\EditCourseDTO;
use App\Data\FullCourseDTO;
use App\Data\ItemDTO;
use App\Data\MyCourseDTO;

interface ItemRepositoryInterface
{
    public function add(ItemDTO $item);

    /**
     * @param int $userId
     * @return MyCourseDTO[]\Generator
     */
    public function findByUserId(int $userId): \Generator;

    /**
     * @return FullCourseDTO[]|\Generator
     */
    public function findAll(): \Generator;

    public function findOne(int $id): FullCourseDTO;

    public function edit(EditCourseDTO $item);

    public function delete(int $id);
}