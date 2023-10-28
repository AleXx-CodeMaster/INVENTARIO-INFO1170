<?php
if (isset($_POST['tipo_registro'])) {
    $tipo_registro = $_POST['tipo_registro'];

    if ($tipo_registro === 'Adminstrador') {
        // Redirige a la página de registro para administradores
        header('Location: registro_1.2A.php');
        exit();
    } elseif ($tipo_registro === 'Individual') {
        // Redirige a la página de registro para individuos
        header('Location: registro_1.2P.php');
        exit();
    } else {
        // Maneja casos no válidos si es necesario
        echo "Selección de registro no válida.";
    }
} else {
    // Maneja el caso en el que no se haya enviado ningún tipo de registro
    echo "Seleccione un tipo de registro.";
}
?>
