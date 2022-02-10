<?php

require_once 'AppController.php';

class DefaultController extends AppController
{

    public function index()
    {
        $this->render('home');
    }

    public function home()
    {
        $this->render('home');
    }

    public function new()
    {
        $this->render('new');
    }

    public function shops()
    {
        $this->render('shops');
    }

    public function liked()
    {
        $this->render('liked');
    }

    public function categories()
    {
        $this->render('categories');
    }
}
