/*
Este bloque de codigo se utiliza para validar y procesar los datos de un formulario antes de enviarlos al servidor. El propósito de este código es garantizar que los datos ingresados 
por el usuario sean válidos antes de realizar una solicitud al servidor, ya sea para iniciar sesión o registrarse en una aplicación web.

*/ 
function enviarFormulario(tipo) {
    // Validación adicional del lado del cliente antes de enviar los datos al servidor
    if (tipo === 'inicio_sesion') {
        // Validar campos de inicio de sesión (correo electrónico y contraseña)
        var logemail = document.getElementById('logemail').value;
        var logpass = document.getElementById('logpass').value;
        // Realizar las validaciones necesarias antes de enviar los datos al servidor
        if (!logemail || !logpass) {
            alert('Por favor, complete todos los campos de inicio de sesión.');
            return;
        }
    } else if (tipo === 'registro') {
        // Validar campos de registro (nombre completo, correo electrónico y contraseñas)
        var logname = document.getElementById('logname').value;
        var regemail = document.getElementById('regemail').value;
        var regpass = document.getElementById('regpass').value;
        var regpass2 = document.getElementById('regpass2').value;
        // Realizar las validaciones necesarias antes de enviar los datos al servidor
        if (!logname || !regemail || !regpass || !regpass2) {
            alert('Por favor, complete todos los campos de registro.');
            return;
        }
        if (regpass !== regpass2) {
            alert('Las contraseñas no coinciden. Por favor, verifique.');
            return;
        }
    }

    
}
