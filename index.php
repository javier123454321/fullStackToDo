<?php
$DB = require 'core/bootstrap.php';
require (__DIR__.'/core/Router.php');

$router = new Router;

require 'routes.php';

require $router -> direct('about');