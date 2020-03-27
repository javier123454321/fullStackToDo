<?php

require (__DIR__.'/../src/Task.php');
require (__DIR__.'/../core/config.php');
$DB = require_once (__DIR__.'/../core/bootstrap.php');

$tasks = $DB->selectAll('todos', 'Task');

// $DB -> updateTask($_POST['newTask']);

require (__DIR__.'/../views/partialviews/header.php');
require (__DIR__.'/../views/index.view.php');