<?php

require (__DIR__.'/../src/Task.php');
$DB = require_once (__DIR__.'/../core/bootstrap.php');

$tasks = $DB->selectAll('todos', 'Task');

require (__DIR__.'/../views/partialviews/header.php');
require (__DIR__.'/../views/index.view.php');