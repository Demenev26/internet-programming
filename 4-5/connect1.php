<?php
$host = 'localhost';
$database = 'a0644086_games';
$user = 'a0644086_games';
$password = 'root';
//require_once 'connect.php';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));

?>
