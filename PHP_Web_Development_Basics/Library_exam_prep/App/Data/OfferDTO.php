<?php

namespace App\Data;


class OfferDTO
{
    private const TITLE_MIN_LENGTH = 3;
    private const TITLE_MAX_LENGTH = 50;

    private const AUTHOR_MIN_LENGTH = 3;
    private const AUTHOR_MAX_LENGTH = 50;

    private const DESCRIPTION_MIN_LENGTH = 10;
    private const DESCRIPTION_MAX_LENGTH = 10000;

    private const IMAGE_MIN_LENGTH = 3;
    private const IMAGE_MAX_LENGTH = 50;

    private $id;
    private $title;
    private $author;
    private $description;
    private $image;

    private $genreId;
    private $userId;
    private $addedOn;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     * @return OfferDTO
     * @throws \Exception
     */
    public function setDescription($description): OfferDTO
    {
        DTOValidator::validate(self::DESCRIPTION_MIN_LENGTH, self::DESCRIPTION_MAX_LENGTH,
            $description, "text", "Description");

        $this->description = $description;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param $image
     * @return OfferDTO
     * @throws \Exception
     */
    public function setImage($image): OfferDTO
    {

        DTOValidator::validate(self::IMAGE_MIN_LENGTH, self::IMAGE_MAX_LENGTH,
            $image, "text", "Image");

        $this->image = $image;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param $title
     * @return OfferDTO
     * @throws \Exception
     */
    public function setTitle($title): OfferDTO
    {
        DTOValidator::validate(self::TITLE_MIN_LENGTH, self::TITLE_MAX_LENGTH,
            $title, "text", "Title");

        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param $author
     * @return OfferDTO
     * @throws \Exception
     */
    public function setAuthor($author): OfferDTO
    {
        DTOValidator::validate(self::AUTHOR_MIN_LENGTH, self::AUTHOR_MAX_LENGTH,
            $author, "text", "Author");

        $this->author = $author;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGenreId()
    {
        return $this->genreId;
    }

    /**
     * @param mixed $genreId
     */
    public function setGenreId($genreId): void
    {
        $this->genreId = $genreId;
    }

    /**
     * @return mixed
     */
    public function getAddedOn()
    {
        return $this->addedOn;
    }

    /**
     * @param mixed $addedOn
     */
    public function setAddedOn($addedOn): void
    {
        $this->addedOn = $addedOn;
    }


    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }





}