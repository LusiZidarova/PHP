<?php

namespace App\Http;


use App\Data\EditCourseDTO;
use App\Data\ErrorDTO;
use App\Data\CourseDTO;
use App\Service\TechnologyServiceInterface;
use App\Service\CourseServiceInterface;
use Core\DataBinderInterface;
use Core\TemplateInterface;

class CourseHttpHandler extends HttpHandlerAbstract
{
    /**
     * @var TechnologyServiceInterface
     */
    private $technologyService;

    /**
     * @var CourseServiceInterface
     */
    private $courseService;

    public function __construct(TemplateInterface $template,
                                DataBinderInterface $dataBinder,
                                TechnologyServiceInterface $technologyService,
                                CourseServiceInterface $courseService)
    {
        parent::__construct($template, $dataBinder);
        $this->technologyService = $technologyService;
        $this->courseService = $courseService;
    }

    public function add(array $formData = [])
    {
        if (isset($formData['add'])) {
            $this->handleAddProcess($formData);
        } else {
            $this->render("courses/add", $this->technologyService->getAll());
        }
    }

    public function myItems()
    {
        $this->render("items/mine", $this->courseService->getByUserId($_SESSION['id']));
    }

    public function all()
    {
        $this->render("items/all", $this->courseService->getAll());
    }

    public function edit(array $formData = [])
    {
        if (isset($formData['edit'])) {
            $this->handleEditProcess($formData);
        } else {
            $dto = $this->getEditDTO();
            $this->render("items/edit", $dto);
        }
    }

    private function handleAddProcess(array $formData)
    {
        try {
            /** @var CourseDTO $dto */
            $dto = $this->dataBinder->bind($formData, CourseDTO::class);
            $dto->setUserId($_SESSION['id']);
            $this->courseService->create($dto);
            $this->redirect("courses.php");
        } catch (\Exception $ex) {
            $this->render("courses/create_courses", $this->technologyService->getAll(),
                [$ex->getMessage()]);
        }
    }


    private function handleEditProcess(array $formData)
    {
        try {
            /** @var EditItemDTO $dto */
            $dto = $this->dataBinder->bind($formData, EditItemDTO::class);
            $dto->setUserId($_SESSION['id']);
            $dto->setId($_GET['id']);
            $this->courseService->edit($dto, $_SESSION['id']);
            $this->redirect("my_items.php");
        } catch (\Exception $ex) {
            $dto = $this->getEditDTO();

            $this->render("items/edit", $dto,
                [$ex->getMessage()]);
        }
    }

    public function delete(array $queryData = [])
    {
        $this->courseService->delete($queryData['id'], $_SESSION['id']);
        $this->redirect('my_items.php');
    }

    public function view(array $queryData = [])
    {
        $item = $this->courseService->getOne($queryData['id']);
        $this->render('items/view', $item);
    }

    /**
     * @return EditItemDTO
     * @throws \Exception
     */
    private function getEditDTO(): EditItemDTO
    {
        $item = $this->courseService->getOne($_GET['id']);

        $dto = new EditItemDTO();
        $dto->setId($item->getId());
        $dto->setUserId($item->getUserId());
        $dto->setTitle($item->getTitle());
        $dto->setDescription($item->getDescription());
        $dto->setCategoryId($item->getCategoryId());
        $dto->setImage($item->getImage());
        $dto->setPrice($item->getPrice());

        $dto->setCategories($this->technologyService->getAll());
        return $dto;
    }


}