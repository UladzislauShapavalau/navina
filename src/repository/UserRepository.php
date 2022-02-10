<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/User.php';

class UserRepository extends Repository
{
    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT user_id, login, email, password FROM public.users WHERE email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['user_id'],
            $user['login'],
            $user['email'],
            $user['password'],
        );
    }

    public function getUserById(int $id): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT user_id, login, email, password FROM public.users WHERE user_id = :id
        ');

        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['user_id'],
            $user['login'],
            $user['email'],
            $user['password'],
        );
    }

    public function getAllUsers(): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT user_id, login, email, password FROM public.users
        ');

        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);


        foreach ($users as $user) {
            $result[] = new User(
                $user['user_id'],
                $user['login'],
                $user['email'],
                $user['password'],
            );
        }

        return $result;
    }

    public function addUser(string $login, string $email, string $password): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.users (login, email, password, created_at)
            VALUES (?, ?, ?, ?)
        ');
        $stmt->execute([
            $login,
            $email,
            password_hash($password, PASSWORD_DEFAULT),
            $date->format('Y-m-d')
        ]);
    }
}
