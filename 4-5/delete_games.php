
<?php
$mysqli = new mysqli("localhost", "a0644086_games", "root", "a0644086_games") or die ("Невозможно
подключиться к серверу");
$id_games = $_GET['id_games'];
$result = $mysqli->query("DELETE FROM games WHERE id_games='$id_games'");
header("Location: index.php");
exit;
?>
