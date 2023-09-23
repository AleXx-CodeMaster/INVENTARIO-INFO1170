function validarFormulario() {
    // Validación adicional del lado del cliente antes de enviar el formulario
    var contrasena = document.getElementById('contrasena_empresa').value;
    var repetirContrasena = document.getElementById('repetir_contrasena').value;

    if (contrasena !== repetirContrasena) {
        alert('Las contraseñas no coinciden. Por favor, verifique.');
        return false; // Evita que el formulario se envíe si las contraseñas no coinciden
    }

    return true; // Envía el formulario si todas las validaciones son exitosas
}
