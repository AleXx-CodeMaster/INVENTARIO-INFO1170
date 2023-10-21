<!DOCTYPE html>
<html>
<head>
    <title>Lector de Códigos de Barras</title>
</head>
<body>
    <h1>Lector de Códigos de Barras</h1>

    <form action="piu.php" method="post">
        <label for="codigo_barras">Código de Barras:</label>
        <input type="text" name="codigo_barras" id="codigo_barras">
        <input type="submit" value="Guardar">
    </form>

    <div id="resultado"></div>

    <script>
        // Capturar automáticamente el código de barras usando JavaScript
        document.getElementById('codigo_barras').addEventListener('input', function() {
            var codigo = this.value;
            document.getElementById('resultado').innerText = "Código de Barras leído: " + codigo;
            // Puedes agregar aquí la lógica para enviar el código a tu backend en PHP
        });
    </script>
</body>
</html>

