<?php

declare(strict_types=1);

namespace Framework;

class Router
{
    private array $routes = [];

    public function add(string $method, string $path, array $controller)
    {
        $path = $this->normalisePath($path);
        $this->routes [] = [
            'method'=> strtoupper($method),
            'path'=>$path,
            'controller'=>$controller
        ];

    }

    private function normalisePath(string $path): string
    {
        $path = trim($path, '/');
        $path = "/{$path}/";
        $path = preg_replace('#[/]{2,}#', '/', $path);
        return $path;
    }

    public function dispatch(string $path, String $method)
    {
        $path = $this->normalisePath($path);
        $method = strtoupper($method);

        foreach ($this->routes as $route) {
            if (!preg_match("#^{$route['path']}$#", $path) || $route['method'] !== $method) {
                continue;
            }
            [$class, $function] = $route['controller'];
            $controllerInstance = new $class;
            $controllerInstance->{$function}();

        }

    }

}