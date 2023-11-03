<?php
include("conex.inc");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $rut = $_POST["rut"];
    $telefono = $_POST["telefono"];
    $activo = $_POST["activo"];
    $area = $_POST["area"];

    $sql = "INSERT INTO trabajadores (nombre, correo, rut, telefono, activo, area) VALUES ('$nombre', '$correo', '$rut', '$telefono', '$activo', '$area')";
    if (mysqli_query($conn, $sql)) {
        echo "Trabajador agregado con éxito";
    } else {
        echo "Error al agregar el trabajador: " . mysqli_error($conn);
    }
}

echo '<a href="registro.php">Volver atras</a>';

mysqli_close($conn);
?>
