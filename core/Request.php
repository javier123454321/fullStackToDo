<?php

class Request{
    public static function uriRedirect(){

        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    
    }
}