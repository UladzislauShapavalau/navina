<?php

require 'Router.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);
$method = trim($_SERVER['REQUEST_URI'], '/');

Router::get('', 'DefaultController');
Router::get('home', 'DefaultController');
Router::get('new', 'DefaultController');
Router::get('liked', 'DefaultController');
Router::get('shops', 'DefaultController');
Router::get('categories', 'DefaultController');
Router::get('paper', 'DefaultController');
Router::get('logout', 'SecurityController');
Router::post('login', 'SecurityController');
Router::post('registration', 'SecurityController');
Router::get('getpaper', 'DefaultController');

Router::run($path, $method);
