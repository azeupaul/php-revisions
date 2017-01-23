<?php

class Router{
    
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function get($route, $controller)
    {
        $this->routes['GET'][$route] = $controller;
    }

    public function post($route, $controller)
    {
        $this->routes['POST'][$route] = $controller;
    }

    public function direct($uri, $method)
    {
        if(array_key_exists($uri, $this->routes[$method])){
            return $this->routes[$method][$uri];
        }

        throw new Exception("No route found for this uri: ". $uri);
        
    }
}