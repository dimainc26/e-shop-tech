<?php

namespace Router;

use App\Exceptions\NotFoundException;

class Router
{
    public $routes = [];

    public function __construct(public $url) {}

    public function get(string $path, string $action)
    {
        $this->routes['GET'][] = new Route($path, $action);
    }

    public function post(string $path, string $action)
    {
        $this->routes['POST'][] = new Route($path, $action);
    }

    public function run()
    {
        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->matches($this->url)) {
                $route->execute();
                return;
            }
        }

        throw new NotFoundException("La page est Introuvable");
    }
}
