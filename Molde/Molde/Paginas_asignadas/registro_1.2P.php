<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Individual</title>
</head>
<body>
    <h1>Ingresar Datos Personales</h1>
    <form action="procesar_registro.php" method="post" enctype="multipart/form-data">
        <label for="foto_local">Subir foto de Local:</label>
        <input type="file" name="foto_local" accept="image/*" required>
        
        <label for="nombre_servidor">Nombre del servidor:</label>
        <input type="text" name="nombre_servidor" required>
        
        <label for="nombre_usuario">Nombre de usuario:</label>
        <input type="text" name="nombre_usuario" required>
        
        <label for="correo">Correo electrónico:</label>
        <input type="email" name="correo" required>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" name="telefono" required>
        
        <label for="comentario">Comentario (opcional):</label>
        <textarea name="comentario" rows="4" cols="50"></textarea>
        
        <label for="contrasena_local">Contraseña del Local:</label>
        <input type="password" name="contrasena_local" required>
        
        <label for="contrasena_usuario">Contraseña de usuario:</label>
        <input type="password" name="contrasena_usuario" required>
        
        <label for="contrasena_emergencia">Contraseña de emergencia:</label>
        <input type="password" name="contrasena_emergencia" required>
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
