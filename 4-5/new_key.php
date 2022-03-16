<html>
<head> <title> Добавление нового ключа </title> </head>
<body>
<H2>Добавление нового ключа:</H2>
<form action="save_new_key.php" method="get">
<?
    $mysqli = new mysqli("localhost", "a0644086_games", "root", "a0644086_games");
if ($mysqli->connect_errno) {
echo "Невозможно подключиться к серверу"; 
}
//id игры
   $result = $mysqli->query("SELECT id_games, games_name FROM games");
    echo "<br>Игра: <select name='id_games'>"; 

    if ($result){
    while ($row = $result->fetch_array()){
    $id_games = $row['id_games'];
    $games_name = $row['games_name'];
    echo "<option value='$id_games'>$games_name</option>";
    }
    }
	 echo "</select>";
//id цифрового магазина
	 $result = $mysqli->query("SELECT id_stores, stores_name FROM stores");
     echo "<br>Магазин: <select name='id_stores'>";

     if ($result){
     while ($row = $result->fetch_array()){
      $id_stores = $row['id_stores'];
      $stores_name = $row['stores_name'];
      echo "<option value='$id_stores'>$stores_name</option>";
      }
      }
       echo "</select>";

print "<br> дата приобретения: <input name='key_date' placeholder='dd-mm-yyyy' type='date' value=$key_date>";
print "<br> дата окончания: <input name='key_date_end' placeholder='dd-mm-yyyy' type='date' value=$key_date_end>";
print "<br> стоимость: <input name='key_cost' size='11' type='int' value=$key_cost>";
print "<br> ключ: <input name='key_name' size='11' type='varchar'value=$key_name>";
?>


<p><input name="add" type="submit"  value="Добавить">
<input name="b2" type="reset" value="Очистить"></p>
<p><a href="kluch.php"> Вернуться к списку ключей </a>
</form>
</body>
</html>
