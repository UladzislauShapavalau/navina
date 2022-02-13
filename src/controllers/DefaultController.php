<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../repository/PaperRepository.php';

class DefaultController extends AppController
{
    public function index()
    {
        $userRepository = new UserRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
            $this->render('home', ['user' => $user]);
        } else {
            $this->render('home');
        }
    }

    public function home()
    {
        $userRepository = new UserRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
            $this->render('home', ['user' => $user]);
        } else {
            $this->render('home');
        }
    }

    public function new()
    {
        $userRepository = new UserRepository();
        $paperRepository = new PaperRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
            $this->render('new', ['user' => $user, 'papers' => $paperRepository->getPaper()]);
        } else {
            $this->render('new');
        }
    }

    public function shops()
    {
        $userRepository = new UserRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
            $this->render('shops', ['user' => $user]);
        } else {
            $this->render('shops');
        }
    }

    public function liked()
    {
        $userRepository = new UserRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
            $this->render('liked', ['user' => $user]);
        } else {
            $this->render('liked');
        }
    }

    public function categories()
    {
        $userRepository = new UserRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
            $this->render('categories', ['user' => $user]);
        } else {
            $this->render('categories');
        }
    }

    public function paper()
    {


        $this->render('paper');
    }

    public function getpaper()
    {
        $paperRepository = new PaperRepository();
        $this->render('paper', ['user' => $this->getUser(), 'paper' => $paperRepository->getById($_GET['id'])]);
    }

    private function getUser(): ?User
    {
        $userRepository = new UserRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
            return $user;
        } else {
            return null;
        }
    }
}
