<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Empleados</title>
    <script src="./js/agregar-empleado.js"></script>
</head>
<body>
    <h2>Registrador de Datos</h2>
    <form action="procesar_registro.php" method="post" enctype="multipart/form-data">
        <label for="foto_local">Subir foto de Local:</label><br>
        <input type="file" name="foto_local" accept="image/*" required><br>
        
        <label for="nombre_servidor">Nombre del servidor:</label>
        <input type="text" name="nombre_servidor" required><br>
        
        <label for="nombre_usuario">Nombre de usuario:</label>
        <input type="text" name="nombre_usuario" required><br>
        
        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" required><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" required><br>
        
        <label for="comentario">Comentario (opcional):</label>
        <textarea name="comentario" rows="4" cols="50"></textarea><br>
        
        <label for="contrasena_local">Contraseña del Local:</label>
        <input type="password" name="contrasena_local" required><br>
        
        <label for="contrasena_usuario">Contraseña de usuario:</label>
        <input type="password" name="contrasena_usuario" required><br>
        
        <label for="contrasena_emergencia">Contraseña de emergencia:</label>
        <input type="password" name="contrasena_emergencia" required><br>

        <label for="foto_empresa">Subir foto de empresa:</label>
        <input type="file" name="foto_empresa" accept="image/*" required><br>
        
        <label for="cantidad_empleados">Seleccione la cantidad de empleados:</label>
        <input type="number" id="cantidad_empleados" name="cantidad_empleados" min="0" required>
        <input type="button" value="Agregar empleados" onclick="agregarEmpleadoFields()">

        <!-- Contenedor para campos de empleados -->
        <div id="empleados-container"></div>

        <!-- Contraseña secundaria para empleados -->
        <label for="contrasena_secundaria">Contraseña secundaria para empleados:</label>
        <input type="password" name="contrasena_secundaria" required><br>
            
        <input type="submit" value="Registrar">
        

    </form>

    
</body>
</html>



