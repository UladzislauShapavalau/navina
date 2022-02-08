<?php

require 'Router.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);
$method = trim($_SERVER['REQUEST_URI'], '/');

Router::get('', 'DefaultController');
Router::get('home', 'DefaultController');
Router::get('logout', 'SecurityController');
Router::post('login', 'SecurityController');
Router::post('register', 'SecurityController');

Router::run($path, $method);
