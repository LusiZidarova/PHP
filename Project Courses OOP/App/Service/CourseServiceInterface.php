<?php

namespace App\Service;


use App\Data\EditCourseDTO;
use App\Data\FullCourseDTO;
use App\Data\CourseDTO;
use App\Data\MyCourseDTO;

interface CourseServiceInterface
{
    public function create(CourseDTO $item);

    /**
     * @param int $userId
     * @return MyCourseDTO[]|\Generator
     */
    public function getByUserId(int $userId): \Generator;

    /**
     * @return FullCourseDTO[]|\Generator
     */
    public function getAll(): \Generator;

    public function getOne(int $id): FullCourseDTO;

    public function edit(EditCourseDTO $item, int $userId);

    public function delete(int $coursId, int $userId);

}