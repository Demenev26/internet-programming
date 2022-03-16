<?php
$mysqli = new mysqli("localhost", "a0644086_games", "root", "a0644086_games") or die ("Невозможно
подключиться к серверу");
$id_stores = $_GET['id_stores'];
$result = $mysqli->query("DELETE FROM stores WHERE id_stores='$id_stores'");
header("Location: stores.php");
exit;
?>
