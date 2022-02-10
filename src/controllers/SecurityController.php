<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';

class SecurityController extends AppController
{

    public function login()
    {
        $userRepository = new UserRepository();

        if (!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];

        $user = $userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ["The user doesn't exist"]]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ["Email or password is incorrect"]]);
        }

        if (!password_verify($password, $user->getPassword())) {
            return $this->render('login', ['messages' => ["Email or password is incorrect"]]);
        }

        setcookie('user_id', $user->getId(), time() + (86400 * 30), "/");
        $_COOKIE['user_id'] = $user->getId();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/");
    }

    public function registration()
    {
        if (!$this->isPost()) {
            return $this->render('registration');
        }

        $userRepository = new UserRepository();

        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['login'];

        $user = $userRepository->getUser($email);

        if ($user) {
            return $this->render('registration', ['messages' => ["This email is already used"]]);
        }

        $userRepository->addUser($name, $email, $password);
        $user = $userRepository->getUser($email);

        setcookie('user_id', $user->getId(), time() + (86400 * 30), "/");
        $_COOKIE['user_id'] = $user->getId();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url/");
    }

    public function logout()
    {
        unset($_COOKIE['user_id']);
        setcookie("user_id", "", time() - 3600);

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: $url");
    }
}
