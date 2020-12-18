<?php

namespace App\Service;


use App\Data\EditCourseDTO;
use App\Data\FullCourseDTO;
use App\Data\CourseDTO;
use App\Data\MyCourseDTO;
use App\Repository\CourseRepositoryInterface;

class CourseService implements CourseServiceInterface
{
    /**
     * @var CourseRepositoryInterface
     */
    private $courseRepository;

    /**
     * ItemService constructor.
     * @param CourseRepositoryInterface $courseRepository
     */
    public function __construct(CourseRepositoryInterface $courseRepository)
    {
        $this->courseRepository = $courseRepository;
    }


    public function create(CourseDTO $course)
    {
        $this->courseRepository->add($course);
    }

    /**
     * @param int $userId
     * @return MyCourseDTO[]|\Generator
     */
    public function getByUserId(int $userId): \Generator
    {
        return $this->courseRepository->findByUserId($userId);
    }

    /**
     * @return FullCourseDTO[]|\Generator
     */
    public function getAll(): \Generator
    {
        return $this->courseRepository->findAll();
    }

    public function edit(EditCourseDTO $course, int $userId)
    {
       $course = $this->courseRepository->findByUserId($userId);
       $hasCourse = false;
       foreach ($course as $userCourse) {
           if ($userCourse->getId() == $course->getId()) {
               $hasCourse = true;
               break;
           }
       }

       if (!$hasCourse) {
           throw new \Exception('Not an owner');
       }

       $this->courseRepository->edit($course);
    }

    public function getOne(int $id): FullCourseDTO
    {
        return $this->courseRepository->findOne($id);
    }

    public function delete(int $courseId, int $userId)
    {

        $course = $this->getOne($courseId);

        if ($course->getUserId() != $userId) {
            throw new \Exception('Not an owner');
        }

        $this->courseRepository->delete($courseId);
    }
}