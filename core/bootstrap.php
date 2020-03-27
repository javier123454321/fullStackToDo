<?php

$config = require 'config.php';
require 'database/DBConnection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make($config['database']));