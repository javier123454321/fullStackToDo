<?php
$DB = require_once (__DIR__.'/../core/bootstrap.php');

if(isset($_POST['newTask'])){
    $DB->updateTask($_POST['newTask']);
}

header("Location: ../");
exit;