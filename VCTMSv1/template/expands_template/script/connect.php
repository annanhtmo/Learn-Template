<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "db_nvd3_lesson";

$connect = mysql_connect($server, $user, $password, $database);
$connect_db = mysql_select_db($database, $connect);
?>