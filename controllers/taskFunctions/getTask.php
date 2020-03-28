<?php
$DB = require_once (__DIR__.'/../../core/bootstrap.php');
require (__DIR__.'/../../src/Task.php');

$tasks = $DB->selectAll('todos', 'Task');
echo (json_encode($tasks));
