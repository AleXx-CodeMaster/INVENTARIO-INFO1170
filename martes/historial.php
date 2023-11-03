<!DOCTYPE html>
<html>
<head>
    <title>Historial de Registros</title>
</head>
<body>
    <h1>Historial de Registros</h1>
    
    <table>
        <tr>
            <th>Fecha</th>
            <th>Tipo de Evento</th>
            <th>Descripción</th>
        </tr>
        <?php

        include("conex.inc");      
        $consulta = "SELECT fecha, tipo_evento, descripcion FROM historial_registros";
        $result = mysqli_query($conn, $consulta);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['fecha'] . "</td>";
                echo "<td>" . $row['tipo_evento'] . "</td>";
                echo "<td>" . $row['descripcion'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "No se encontraron registros en el historial.";
        }
        
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
