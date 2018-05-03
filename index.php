<?php
ini_set('display_errors', 1);
session_start();
const FOLDER = "/hillel-mvc_project_1/";

require_once $_SERVER['DOCUMENT_ROOT'] . FOLDER . "config.php";

require_once "Router.php";

Router::start();

?>

