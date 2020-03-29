<?php
$DB = require_once (__DIR__.'/../../core/bootstrap.php');

if(isset($_POST['newTask'])){
    $DB->insert('todos', 
    'description', 
    $_POST['newTask']);
    echo $_POST['newTask']." added successfully";
}
