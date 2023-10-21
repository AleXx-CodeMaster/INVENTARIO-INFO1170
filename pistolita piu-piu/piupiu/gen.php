<?php
// Incluir la biblioteca PHP Barcode Generator
require 'codigobarra.php'; // Asegúrate de ajustar la ruta al archivo "barcode.php"

include('conex.inc');
// Crear una conexión a la base de datos
$conn = new mysqli($server, $username, $password, $database);

// Comprobar la conexión a la base de datos
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener el ID desde la base de datos (reemplaza '1' con el ID que desees)
$id = 1;

// Generar el código de barras
$barcode = new Barcode();
$barcode->generateBarcode($id);

// Mostrar el código de barras
echo '<img src="' . $barcode->getBase64() . '" alt="Código de Barras">';
?>
