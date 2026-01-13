<?php

declare(strict_types=1);

namespace app;
use app\Route;
use app\InfoController;
use app\HomeController;

class Router
{
    private array $routes = [];
    public function registerController(string $className): void
    {
        $reflection = new \ReflectionClass($className);

        $prefix = '';
        $classAttributes = $reflection->getAttributes(Route::class);
        
        if(!empty($classAttributes)) {
            $prefix = $classAttributes[0]->newInstance()->path;
        }

        foreach($reflection->getMethods() as $method) {
            $attributes = $method->getAttributes(Route::class);

            foreach($attributes as $attribute) {
                $route = $attribute->newInstance();

                $fullPath = $prefix . $route->path;
                $this->routes[$fullPath] = [$className, $method->getName()];
            }
        }
    }

    public function dispatch(string $uri): void
    {
        if (!array_key_exists($uri, $this->routes)) {
            echo "404 Not Found: Маршрут '$uri' не найден.";
            return;
        }
        
        [$class, $method] = $this->routes[$uri];

        $controller = new $class();
        $controller->$method();
    }
}
