<?php

use Core\Framework;

$app = new Framework();

$app::get('/', 'HomeController', 'test');
$app::post('/', 'HomeController', 'test');
$app->run();