<?php

$router -> get('/', 'controllers/index.php');
$router -> get('/about', 'controllers/about.php');
$router -> get('/contact', 'controllers/contact.php');
$router -> get('/sysInfo', 'controllers/system.php');
$router -> post('/names', 'controllers/name.php');
