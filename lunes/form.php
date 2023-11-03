<?php

 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//

//habilita la visualizacion de errores presentes en el navegador y los informa 
ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL); 

 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//

include("conex.inc"); // Incluye el archivo para conectar a la base de datos.
$conn = mysqli_connect($server, $username, $password, $database); // Establece la coneccion a la base de datos.
if (!$conn) {
    die("Error en la conexión: " . mysqli_connect_error()); // Muestra un mensaje de error si falla.
}

 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//

else{
    // Procesa el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST")// obtiene los valores de campos para el formulario
     {
        $nombre = $_POST["nombre"]; 
        $correo = $_POST["correo"]; 
        $mensaje = $_POST["mensaje"]; 

        // Inserta los datos en la base de datos
        $sql = "INSERT INTO contacto (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";
        if (mysqli_query($conn, $sql)) { // Ejecuta la consulta y verifica si tiene funciono.
            echo "Mensaje enviado con éxito";
        } else {
            echo "Error al enviar el mensaje: " . mysqli_error($conn); // Muestra un mensaje si la consulta falla.
        }
    }
}

 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//

$consulta = "SELECT * FROM contacto "; // Consulta los registros
$result = mysqli_query($conn, $consulta); // Ejecuta la consulta SQL.

 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
if (!$result) {
    echo "No se logró la consulta: " . mysqli_error($conn); // Muestra un mensaje si falla.
} else {
    echo "<table>"; // Inicia una tabla HTML para mostrar los datos.
    echo "<tr>"; // Inicia una fila en la tabla.
    echo "<th><h1>ID</h1></th>"; // Crea una celda de encabezado para "ID".
    echo "<th><h1>Nombre</h1></th>"; // Crea una celda de encabezado para "Nombre".
    echo "<th><h1>Correo</h1></th>"; // Crea una celda de encabezado para "Correo".
    echo "<th><h1>Mensaje</h1></th>"; // Crea una celda de encabezado para "Mensaje".
    echo "</tr>"; // Cierra la fila de encabezado.
 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
    while ($colum = mysqli_fetch_array($result))//repite el proceso de creado de tablas para asi rellenar con todos los datos de la base de datos.
     {
        echo "<tr>"; // Inicia una nueva fila para los datos.
 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
        //crea las filas para llenar con los datos especificos para ellos
        echo "<td><h2>" . $colum['id'] . "</h2></td>"; 
        echo "<td><h2>" . $colum['nombre'] . "</h2></td>"; 
        echo "<td><h2>" . $colum['correo'] . "</h2></td>";
        echo "<td><h2>" . $colum['mensaje'] . "</h2></td>";

 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
        echo "</tr>"; // Cierra la fila de datos.
    }
    echo "</table>"; // Cierra la tabla HTML.
}
 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//

echo '<a href="index.html">Volver atras</a>'; // Agrega un enlace para volver al index.html.

 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//

mysqli_close($conn); // Cierra la conexion a la base de datos para liberar recursos.

 //------------------------------------------------------------------------------//
//------------------------------------------------------------------------------//
?>