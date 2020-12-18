<?php

namespace App\Http;


use App\Data\EditOfferDTO;
use App\Data\ErrorDTO;
use App\Data\OfferDTO;
use App\Service\GenreServiceInterface;
use App\Service\BookServiceInterface;
use Core\DataBinderInterface;
use Core\TemplateInterface;

class OfferHttpHandler extends HttpHandlerAbstract
{
    /**
     * @var GenreServiceInterface
     */
    private $genreService;

    /**
     * @var BookServiceInterface
     */
    private $bookService;

    public function __construct(TemplateInterface $template,
                                DataBinderInterface $dataBinder,
                                GenreServiceInterface $genreService,
                                BookServiceInterface $bookService)
    {
        parent::__construct($template, $dataBinder);
        $this->genreService = $genreService;
        $this->bookService = $bookService;
    }

    public function add(array $formData = [])
    {

        if (isset($formData['add'])) {

            $this->handleAddProcess($formData);
        } else {
            $this->render("books/add", $this->genreService->getAll());
        }
    }

    public function myBooks()
    {
        $this->render("books/mine", $this->bookService->getByUserId($_SESSION['id']));
    }

    public function allBooks()
    {
        $this->render("books/all", $this->bookService->getAll());
    }

    /**
     * @param array $formData
     * @throws \Exception
     */
    public function edit(array $formData = [])
    {
        if (isset($formData['edit'])) {
            $this->handleEditProcess($formData);
        } else {
            $dto = $this->getEditDTO();
            $this->render("books/edit", $dto);
        }
    }

    private function handleAddProcess(array $formData)
    {
        try {
            /** @var OfferDTO $dto */
            $dto = $this->dataBinder->bind($formData, OfferDTO::class);
            $dto->setUserId($_SESSION['id']);
            $this->bookService->create($dto);
            $this->redirect("my_books.php");
        } catch (\Exception $ex) {
            $this->render("books/аdd", $this->genreService->getAll(),
                [$ex->getMessage()]);
        }
    }

    /**
     * @param array $formData
     * @throws \Exception
     */
    private function handleEditProcess(array $formData)
    {
        try {
            /** @var EditOfferDTO $dto */
            $dto = $this->dataBinder->bind($formData, EditOfferDTO::class);
            $dto->setUserId($_SESSION['id']);
            $dto->setId($_GET['id']);
            $this->bookService->edit($dto, $_SESSION['id']);
            $this->redirect("profile.php");
        } catch (\Exception $ex) {
            $dto = $this->getEditDTO();

            $this->render("books/edit", $dto,
                [$ex->getMessage()]);
        }
    }

    public function delete(array $queryData = [])
    {
        $this->bookService->delete($queryData['id'], $_SESSION['id']);
        $this->redirect('books.php');
    }

    public function view(array $queryData = [])
    {
        $book = $this->bookService->getOne($queryData['id']);
        $this->render('books/view', $book);
    }

    /**
     * @return EditOfferDTO
     * @throws \Exception
     */
    private function getEditDTO(): EditOfferDTO
    {
        $book = $this->bookService->getOne($_GET['id']);

        $dto = new EditOfferDTO();
        $dto->setId($book->getId());
        $dto->setTitle($book->getTitle());
        $dto->setAuthor($book->getAuthor());
        $dto->setDescription($book->getDescription());
        $dto->setImage($book->getImage());
        $dto->setUserId($book->getUserId());
        $dto->setGenries($this->genreService->getAll());
        return $dto;
    }


}