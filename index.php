<?php
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once "./Application/intermediary.php";
    $myApp = new App();
?>