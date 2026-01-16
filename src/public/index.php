<?php

declare(strict_types=1);

use Masqueradis\Routers\Router;

$loader = require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router($loader);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->dispatch('App\Controllers\\', $uri);
