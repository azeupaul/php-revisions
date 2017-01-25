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
            $params = explode('@', $this->routes[$method][$uri]);
            return $this->callAction($params[0], $params[1]);
        }

        throw new Exception("No route found for this uri: ". $uri);
        
    }

    protected function callAction($controller, $action)
    {
        $controller = new $controller();
        if(!method_exists($controller, $action)){
            throw new Exception("Controller '{$controller}' doesn't respond to {$action} action.");
        }

        return $controller->$action();
    }
}