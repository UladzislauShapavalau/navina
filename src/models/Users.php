<?php

class User
{
    private $user_id;
    private $login;
    private $email;
    private $password;

    public function __construct(int $user_id, string $login, string $email, string $password)
    {
        $this->user_id = $user_id;
        $this->login = $login;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId(): int
    {
        return $this->user_id;
    }

    public function setId(int $user_id)
    {
        $this->user_id = $user_id;
    }

    public function getName(): string
    {
        return $this->login;
    }

    public function setName(string $login)
    {
        $this->login = $login;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname)
    {
        $this->surname = $surname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }
}
