<?php
$DB = require_once (__DIR__.'/../../core/bootstrap.php');

if(isset($_POST['newTask'])){
    $DB->insert('todos', 
    'description', 
    $_POST['newTask']);
}
header("Location: ".$_SERVER["HTTP_ORIGIN"].'/');
exit;