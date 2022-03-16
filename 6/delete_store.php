<?php
include("checks.php");
require_once 'connect1.php';
$mysqli = new mysqli($host, $user, $password, $database)
or die ("Невозможно подключиться к серверу");
$id_stores = $_GET['id_stores'];
if ($_SESSION['type'] == 2){
    $result = $mysqli->query("DELETE FROM stores WHERE id_stores='$id_stores'");
    header("Location: storesAdm.php");
}else{
    echo "Недостаточно прав";
header("Location: stores.php");}
exit;
?>
