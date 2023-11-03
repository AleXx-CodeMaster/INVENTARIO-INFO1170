<!DOCTYPE html>
<html>
<head>
    <title>Admin Contact </title>
</head>
<body>
    <h1>Admin Contact   </h1>
    
    <h2>Buscar Persona</h2>
    <form action="contact_admin.php" method="post">
        <label for="nombre">Nombre de la Persona:</label>
        <input type="text" name="nombre" id="nombre" required>
        <input type="submit" value="Buscar">
    </form>
    
    <h2>Dejar un Mensaje</h2>
    <form action="contact_admin.php" method="post">
        <label for="destinatario">Destinatario:</label>
        <input type="text" name="destinatario" id="destinatario" required><br><br>
        <label for="respuesta">Respuesta:</label>
        <textarea name="respuesta" id="respuesta" required></textarea><br><br>
        <input type="submit" value="Enviar Mensaje">
    </form>
    
    <h2>Preguntas y Respuestas</h2>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Pregunta</th>
            <th>Respuesta</th>
        </tr>
        <?php
        
        include("conex.inc");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["nombre"])) {
                $nombre = $_POST["nombre"];
                $consulta = "SELECT nombre, respuesta FROM admin WHERE nombre = '$nombre'";
                $pregunta = "SELECT mensaje FROM mensajes WHERE destinatario = '$nombre'";
                $result = mysqli_query($conn, $consulta);
                $preguntaResult = mysqli_query($conn, $pregunta);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['nombre'] . "</td>";
                        echo "<td>";
                        if ($preguntaRow = mysqli_fetch_assoc($preguntaResult)) {
                            echo $preguntaRow["mensaje"];
                        } else {
                            echo "No se encontró una pregunta para este destinatario.";
                        }

                        echo "</td>";
                        echo "<td>" . $row['respuesta'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No se encontraron resultados.";
                }
            } elseif (isset($_POST["destinatario"]) && isset($_POST["respuesta"])) {
                $destinatario = $_POST["destinatario"];
                $respuesta = $_POST["respuesta"];
                $sql = "INSERT INTO admin (nombre, respuesta) VALUES ('$destinatario', '$respuesta')";
                if (mysqli_query($conn, $sql)) {
                    echo "Mensaje enviado con éxito";
                } else {
                    echo "Error al enviar el mensaje: " . mysqli_error($conn);
                }
            }
        }
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
