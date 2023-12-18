<?php

require 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$router = require 'src/EP00/routes.php';
$router->dispatch($uri);
