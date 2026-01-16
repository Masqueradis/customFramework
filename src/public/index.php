<?php

declare(strict_types=1);

$loader = require_once __DIR__ . '/../vendor/autoload.php';

use Masqueradis\Routers\Router;

$router = new Router($loader);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->dispatch('App\Controllers\\', $uri);
