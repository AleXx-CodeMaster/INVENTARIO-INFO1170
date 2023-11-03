<?php
$server = "db.inf.uct.cl";
$username = "aamonsalve";
$password = "21094656";
$database = "A2023_aamonsalve";
$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Error en la conexion: " . mysqli_connect_error());
}
?>

