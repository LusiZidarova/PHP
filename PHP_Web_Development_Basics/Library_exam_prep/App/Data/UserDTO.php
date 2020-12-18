<?php

namespace App\Data;


class UserDTO
{
    private const USERNAME_MIN_LENGTH = 4;
    private const USERNAME_MAX_LENGTH = 255;

    private const PASSWORD_MIN_LENGTH = 4;
    private const PASSWORD_MAX_LENGTH = 255;

    private const FULLNAME_MIN_LENGTH = 5;
    private const FULLNAME_MAX_LENGTH = 255;


    private $id;
    private $username;
    private $password;
    private $fullname;
    private $bornOn;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): UserDTO
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     * @return UserDTO
     * @throws \Exception
     */
    public function setUsername($username): UserDTO
    {
        DTOValidator::validate(self::USERNAME_MIN_LENGTH, self::USERNAME_MAX_LENGTH,
            $username, "text", "Username");
        $this->username = $username;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password
     * @return UserDTO
     * @throws \Exception
     */
    public function setPassword($password): UserDTO
    {
        DTOValidator::validate(self::PASSWORD_MIN_LENGTH, self::PASSWORD_MAX_LENGTH,
            $password, "password", "Password");
        $this->password = $password;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * @param $fullname
     * @return UserDTO
     * @throws \Exception
     */
    public function setFullname($fullname): UserDTO
    {
        DTOValidator::validate(self::FULLNAME_MIN_LENGTH, self::FULLNAME_MAX_LENGTH,
            $fullname, "text", "Full Name");
        $this->fullname = $fullname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBornOn()
    {
        return $this->bornOn;
    }

    /**
     * @param mixed $bornOn
     */
    public function setBornOn($bornOn): void
    {
        $this->bornOn = $bornOn;
    }








}