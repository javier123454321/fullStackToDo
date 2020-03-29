<?php
require (__DIR__.'/core/Router.php');
require (__DIR__.'/core/Request.php');

$router = new Router;
require 'routes.php';

require $router -> direct(Request::uriRedirect(), Request::method());