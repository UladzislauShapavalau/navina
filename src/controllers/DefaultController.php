<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/User.php';
require_once __DIR__ . '/../repository/UserRepository.php';
require_once __DIR__ . '/../repository/PaperRepository.php';
require_once __DIR__ . '/../repository/ShopRepository.php';

class DefaultController extends AppController
{
    public function index()
    {
        $userRepository = new UserRepository();
        $paperRepository = new PaperRepository();
        $shopRepository = new ShopRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
        }
        $this->render('home', ['user' => $user, 'papers' => $paperRepository->getPapers(4), 'shops' => $shopRepository->getShops(4)]);
    }

    public function home()
    {
        $userRepository = new UserRepository();
        $paperRepository = new PaperRepository();
        $shopRepository = new ShopRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
        }
        $this->render('home', ['user' => $user, 'papers' => $paperRepository->getPapers(4), 'shops' => $shopRepository->getShops(4)]);
    }

    public function new()
    {
        $userRepository = new UserRepository();
        $paperRepository = new PaperRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
        }
        $this->render('new', ['user' => $user, 'papers' => $paperRepository->getPapers()]);
    }

    public function shops()
    {
        $userRepository = new UserRepository();
        $shopRepository = new ShopRepository();

        if (isset($_COOKIE['user_id'])) {
            $user = $userRepository->getUserById($_COOKIE['user_id']);
        }
        $this->render('shops', ['user' => $user, 'shops' => $shopRepository->getShops()]);
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
