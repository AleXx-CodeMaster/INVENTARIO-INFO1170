<?php
$server = "db.inf.uct.cl";
$username = "rcarmona";
$password = "21584530";
$database = "A2023_rcarmona";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Error en la conexion: " . mysqli_connect_error());
}
?>

