<!DOCTYPE html>
<html>
<head>
    <title>Registro de Trabajadores</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Registro de Trabajadores</h1>
    <div>
        <input type="text" id="search" placeholder="Buscar trabajador">
        <button id="addWorkerButton" onclick="location.href='addtrabajadores.html'">Agregar Trabajador</button>
    </div>

    <?php
    include("conex.inc");
    $consulta = "SELECT * FROM trabajadores";
    $result = mysqli_query($conn, $consulta);

    if (!$result) {
        echo "No se logró la consulta: " . mysqli_error($conn);
    } else {
        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Nombre</th>";
        echo "<th>Correo</th>";
        echo "<th>Teléfono</th>";
        echo "<th>Activo/No Activo</th>";
        echo "<th>area de trabajo</th>";
        echo "<th>Acciones</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        while ($colum = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $colum['id'] . "</td>";
            echo "<td>" . $colum['nombre'] . "</td>";
            echo "<td>" . $colum['correo'] . "</td>";
            echo "<td>" . $colum['telefono'] . "</td>";
            echo "<td>" . $colum['activo'] . "</td>";
            echo "<td>". $colum["areadetrabajo"] . "</td>";
            echo "<td><button onclick='editWorker(" . $colum['id'] . ")'>Modificar</button> <button onclick='deleteWorker(" . $colum['id'] . ")'>Eliminar</button></td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }

    echo '<a href="index.html">Volver atras</a>';

    mysqli_close($conn);
    ?>
    <script>
        function deleteWorker(workerId) {
        }

        function editWorker(workerId) {
        }
    </script>
</body>
</html>
