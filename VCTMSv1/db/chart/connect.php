<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_nvd3_lesson";

$connect = mysqli_connect($server, $user, $password, $database);
$connect_db = mysqli_select_db($connect, $database);
?>