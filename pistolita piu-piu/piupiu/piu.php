<?php
include("conex.inc");
$conn = new mysqli($server, $username, $password, $database);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Inicializar variables
$mensaje = "";

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['codigo_barras'];

    // Preparar una sentencia SQL para insertar datos en la base de datos
    $sql = "INSERT INTO codigos_de_barras (nombre_completo) VALUES ('$nombre')";

    if ($conn->query($sql) === TRUE) {
        $mensaje = "Los datos se han guardado con éxito.";
    } else {
        $mensaje = "Error al guardar los datos: " . $conn->error;
    }
}
$consulta = "SELECT * FROM codigos_de_barras "; // Consulta los registros
$result = mysqli_query($conn, $consulta); // Ejecuta la consulta SQL.

 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
if (!$result) {
    echo "No se logró la consulta: " . mysqli_error($conn); 
} else {
    echo "<table>"; 
    echo "<tr>"; 
    echo "<th><h1>codigo_barras_id</h1></th>";
    echo "<th><h1>nombre_completo</h1></th>"; 
    echo "</tr>"; // Cierra la fila de encabezado.
 
    while ($colum = mysqli_fetch_array($result))//repite el proceso de creado de tablas para asi rellenar con todos los datos de la base de datos.
     {
        echo "<tr>"; 
        echo "<td><h2>" . $colum['codigo_barras_id'] . "</h2></td>"; 
        echo "<td><h2>" . $colum['nombre_completo'] . "</h2></td>"; 

        echo "</tr>"; // Cierra la fila de datos.
    }
    echo "</table>"; // Cierra la tabla HTML.
}
echo '<a href="form.php">Volver atras</a>'; // Agrega un enlace para volver al index.html.
$conn->close();
?>