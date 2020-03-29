<?php
require_once (__DIR__.'/../vendor/autoload.php');

$config = require 'config.php';

$Connect = new DBConn();
$Connect = $Connect -> make($config['database']);

$DataBaseConnection = new QueryBuilder($Connect);

return $DataBaseConnection;