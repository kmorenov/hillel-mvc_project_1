<?php
ini_set('display_errors', 1);
session_start();
const FOLDER = "/hillel-mvc_project_1/";

require_once "Router.php";

//Router::start();

require_once $_SERVER['DOCUMENT_ROOT'] . FOLDER . "config.php";

if (!empty($_GET['id'])){
    $filename = $_SERVER['DOCUMENT_ROOT'] . FOLDER . "controllers/" . "NewsController.php";
}

if (!empty($_GET['page'])) {
    $filename = $_SERVER['DOCUMENT_ROOT'] . FOLDER . "controllers/HomeController.php";
}

if(strtolower($_SERVER['REQUEST_URI']) == FOLDER){
    require_once $_SERVER['DOCUMENT_ROOT'] . FOLDER . "controllers/HomeController.php";
}elseif(!empty($filename) && file_exists($filename)){
    require_once $filename;
}else{
    require_once $_SERVER['DOCUMENT_ROOT'] . FOLDER . "controllers/404.php";
}
?>

