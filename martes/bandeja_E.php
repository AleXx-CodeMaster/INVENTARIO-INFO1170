<!DOCTYPE html>
<html>
<head>
    <title>Página de Empleados</title>
</head>
<body>
    <h1>Página de Empleados</h1>
    
    <h2>Mis Mensajes</h2>
    <form action="bandeja_E.php" method="post">
        <label for="nombre">Nombre del Empleado:</label>
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="Buscar Mensajes">
    </form>
    

    
    <h2>Enviar Mensaje</h2>
    <form action="bandeja_E.php" method="post">
        <label for="destinatario">Destinatario:</label>
        <input type="text" name="destinatario" id="destinatario" required><br><br>
        <label for="mensaje">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" required></textarea><br><br>
        <input type="submit" value="Enviar Mensaje">
    </form>
    <?php
    include("conex.inc");
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["nombre"])) {
                $nombre = $_POST["nombre"];
                $consulta = "SELECT destinatario, mensaje FROM mensajes WHERE destinatario = '$nombre'";
                $result = mysqli_query($conn, $consulta);
        
                if ($result) {
                    echo "<h3>Mensajes de $nombre</h3>";
                    echo "<ul>";
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<li><strong>Destinatario:</strong> " . $row['destinatario'] . "</li>";
                        echo "<li><strong>Mensaje:</strong> " . $row['mensaje'] . "</li>";
                    }
                    echo "</ul>";
                } else {
                    echo "No se encontraron mensajes para $nombre.";
                }
            } elseif (isset($_POST["destinatario"]) && isset($_POST["mensaje"])) {
                $destinatario = $_POST["destinatario"];
                $mensaje = $_POST["mensaje"];
                $sql = "INSERT INTO mensajes (destinatario, mensaje) VALUES ('$destinatario', '$mensaje')";
                if (mysqli_query($conn, $sql)) {
                    echo "Mensaje enviado con éxito";
                } else {
                    echo "Error al enviar el mensaje: " . mysqli_error($conn);
                }
            }
        }
    ?>
</body>
</html>
