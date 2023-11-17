<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Página de Ayuda </title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Estructura.css')}}">
    <link rel="stylesheet" href="{{asset('css/ayuda.css')}}">
</head>
<body>
    <nav class="Menu"></nav>
    <div class="Cuerpo_Pagina">
        <div id="container">
            <h1>Página de Ayuda de NexusInventory</h1>
            <p>Bienvenido a nuestra página de ayuda interactiva. Haz clic en los botones de ayuda para obtener información adicional.</p>

            <button class="help-button" onclick="toggleHelp('help1')">Ayuda 1</button>
            <div class="help-content" id="help1">
                <p>Esta es la ayuda número 1. Aquí puedes proporcionar información detallada sobre el primer tema de ayuda.</p>
            </div>

            <button class="help-button" onclick="toggleHelp('help2')">Ayuda 2</button>
            <div class="help-content" id="help2">
                <p>Esta es la ayuda número 2. Puedes incluir información detallada sobre el segundo tema de ayuda aquí.</p>
            </div>
        </div>
    </div>

    <script src="js/menu_empleado.js"></script>
    <!-- <script src="../JavaScript/menu_empleado.js"></script> -->
    <script src="js/ayuda.js"></script>
</body>
</html>
