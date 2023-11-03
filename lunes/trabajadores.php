<?php
include("conex.inc");
$consulta = "SELECT * FROM trabajadores";
$result = mysqli_query($conn, $consulta);

if (!$result) {
    echo "No se logró la consulta: " . mysqli_error($conn);
} else {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Correo</th>";
    echo "<th>RUT</th>";
    echo "<th>Teléfono</th>";
    echo "<th>Activo/No Activo</th>";
    echo "<th>Área de Trabajo</th>";
    echo "<th>Acciones</th>";
    echo "</tr>";

    while ($colum = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $colum['id'] . "</td>";
        echo "<td>" . $colum['nombre'] . "</td>";
        echo "<td>" . $colum['correo'] . "</td>";
        echo "<td>" . $colum['rut'] . "</td>";
        echo "<td>" . $colum['telefono'] . "</td>";
        echo "<td>" . $colum['activo'] . "</td>";
        echo "<td>" . $colum['area'] . "</td>";
        echo "<td><button onclick='editWorker(" . $colum['id'] . ")'>Modificar</button> <button onclick='deleteWorker(" . $colum['id'] . ")'>Eliminar</button></td>";
        echo "</tr>";
    }
    echo "</table>";
}

echo '<a href="registro.php">Volver atrás</a>';

mysqli_close($conn);
?>
