function agregarEmpleadoFields() {
    var numEmpleados = parseInt(document.getElementById("cantidad_empleados").value);
    var container = document.getElementById("empleados-container");
    container.innerHTML = ""; // Limpia cualquier campo anterior

    for (var i = 1; i <= numEmpleados; i++) {
        // Este bucle for itera desde 1 hasta el número de empleados especificado.
        // Cada iteración crea campos para un empleado.

        var empleadoDiv = document.createElement("div");
        empleadoDiv.className = "empleado";
        // Se crea un elemento div para contener los campos de cada empleado.
        // Se le asigna una clase "empleado" que podría usarse para aplicar estilos CSS.

        empleadoDiv.innerHTML = `
            <h2>Empleado ${i}</h2>
            <label for="nombre_empleado${i}">Nombre empleado:</label>
            <input type="text" name="nombre_empleado${i}"> <br>   
            <label for="correo_empleado${i}">Correo del empleado:</label>
            <input type="email" name="correo_empleado${i}"> <br>
            <label for="telefono_empleado${i}">Teléfono del empleado:</label>
            <input type="tel" name="telefono_empleado${i}"> <br>
            <label for="contrasena_emergencia_empleado${i}">Contraseña de emergencia del empleado:</label>
            <input type="password" name="contrasena_emergencia_empleado${i}"> <br>
        `;
        // Se configura el contenido HTML dentro del div "empleadoDiv" que incluye etiquetas para nombre, correo, teléfono y contraseña del empleado.
        // El uso de ${i} permite crear campos con nombres únicos para cada empleado.

        container.appendChild(empleadoDiv);
        // Se agrega el div "empleadoDiv" al contenedor "container" en la página.
    }

}