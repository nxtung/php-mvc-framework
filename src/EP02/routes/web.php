<?php

use Core\Framework;

$app = new Framework();

$app::get('/', 'HomeController', 'test');
$app::post('/', 'HomeController', 'test');
$app::get('/new', 'HomeController', 'newTest');
$app::post('/new', 'HomeController', 'newTest');
$app->run();