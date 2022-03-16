<?php
$host = 'localhost';
$database = 'a0644086_games';
$user = 'a0644086_games';
$password = 'root';
$link = mysqli_connect($host, $user, $password, $database)
or die("ошибка" . mysqli_error($link));
?>
