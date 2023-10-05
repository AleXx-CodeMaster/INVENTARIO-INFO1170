document.getElementById("contactForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Evitar el envío del formulario por defecto

    // Obtener los valores de los campos del formulario
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;
    var genero = document.querySelector('input[name="genero"]:checked');
    var aceptaTerminos = document.getElementById("terminos").checked;

    // Construir el mensaje de confirmación
    var mensaje = "Nombre: " + nombre + "\nEmail: " + email;
    if (telefono) {
        mensaje += "\nTeléfono: " + telefono;
    }
    if (genero) {
        mensaje += "\nGénero: " + genero.value;
    }
    mensaje += "\nAcepta los términos y condiciones: " + (aceptaTerminos ? "Sí" : "No");

    // Mostrar una alerta con los datos ingresados
    alert("Gracias por completar el formulario.\n\n" + mensaje);
});

