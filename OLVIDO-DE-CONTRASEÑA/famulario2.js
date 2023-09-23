
function validarFormulario() {
    var nombre_completo = document.getElementById("nombre_completo").value;
    var correo = document.getElementById("correo").value;
    var nueva_contrasena = document.getElementById("nueva_contrasena").value;
    var confirmar_contrasena = document.getElementById("confirmar_contrasena").value;

    // Verificar si las contraseñas coinciden
    if (nueva_contrasena !== confirmar_contrasena) {
        alert("Las contraseñas no coinciden. Por favor, inténtelo de nuevo.");
        return false;
    }


    return true; // El formulario se enviará si todas las validaciones son exitosas.
}