<?php
$DB = require_once (__DIR__.'/../core/bootstrap.php');

if(isset($_GET['newTask'])){
    $DB->updateTask($_GET['newTask']);
}

header("Location: ../");
exit;