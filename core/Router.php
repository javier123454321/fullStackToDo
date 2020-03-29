<?php

class Router{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $controller){
        $this -> routes['GET'][$uri] = $controller;
    }
    
    public function post($uri, $controller){
        $this -> routes['POST'][$uri] = $controller;
    }
    
    public function direct($uri, $request_type){
        if(array_key_exists($uri, $this -> routes[$request_type])){
            return $this->routes[$request_type][$uri];
        }
        else{
            return 'controllers/oops.php';
        }
    }
}