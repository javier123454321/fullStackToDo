<?php

$config = require 'config.php';
require 'database/DBConnection.php';
require 'database/QueryBuilder.php';

$Connect = new DBConn();
$Connect = $Connect -> make($config['database']);

$DataBaseConnection = new QueryBuilder($Connect);

return $DataBaseConnection;