<?php

declare(strict_types=1);

require_once __DIR__ . '/../vendor/autoload.php';

use app\Router;
use app\InfoController;
use app\HomeController;

const CONTROLLERS = [
    HomeController::class,
    InfoController::class
];

$router = new Router();

foreach(CONTROLLERS as $controller)
{
    $router->registerController($controller);
}

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router->dispatch($requestUri);
