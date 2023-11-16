<!DOCTYPE html>
<html>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Estructura.css')}}">
    <link rel="stylesheet" href="{{asset('css/contactanos.css')}}">
<head>
    <title>Formulario de Contacto</title>
</head>
<body>

    <table>
        <tr>
            <th><h1>Contactanos</h1></th>
        </tr>
        <tr>
            <th>
                <form action="form.php" method="post">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" name="nombre" id="nombre" required><br><br>
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" name="correo" id="correo" required><br><br>
                    <label for="mensaje">Mensaje:</label><br>
                    <textarea name="mensaje" id="mensaje" required></textarea><br><br>
                    <input type="submit" value="Enviar">
                </form>
            </th>
        </tr>
    </table>

</body>
</html>
