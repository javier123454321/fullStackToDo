<?php

require '../src/Task.php';
require '../core/config.php';
$DB = require '../core/bootstrap.php';

$tasks = $DB->selectAll('todos', 'Task');

require 'index.view.php';