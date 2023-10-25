<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/menu.css')); ?>">
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
    <nav class="MenuIzq">
        <div class = "Part1_Menu1" >
            <div id = 'INF_Usuer'>
                <img id = 'ImagenUsuario' src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQL-YDLwDpdjFxnqI9CgnAH3nBDTc3NEp9UA&usqp=CAU" alt="Imagen del usuario" width="40px"> <!--Usar una funcion con java scrpit , para cabaiar la imagen , he ir actualizando-->
                <div id = 'bloque_de_Parrafo'>
                    <ul>
                        <li>User: <span>Joaquin Cantero Olivera</span></li>
                        <li>Empresa: <span>Cansue</span></li>
                        <li>Cargo: <span>Admin</span></li>
                        <li>Codigo: <span>#00001</span></li>
                    </ul>
                </div>
            </div><hr>
        </div>
        <div class = " Part1_Menu2">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="calendario">Calendario</a></li>
                <li><a href="clientes">Clientes</a></li>
                <li><a href="codigo_barra">Codigo de Barras</a></li>
            </ul>
            <hr>
            <ul>
                <li><details> <summary>Gestion de Productos</summary>
                <ul>
                    <li><a href="categorias">Categorias</a></li>
                    <li><a href="productos">Productos</a></li>
                    <li><a href="proveedores">Proveedores</a></li>
                </ul> </details> </li>
                <li><details><summary>Gestion de Existencias</summary>
                    <ul>
                        <li><a href="entrada">Entrada</a></li>
                        <li><a href="salida&factura">Salida&Factura</a></li>
                    </ul></details></li>
            </ul>
            <hr>
            <ul>
                <li><a href="nosotros">Más sobre Nosotros</a></li>
                <li><a href="ajustes">Ajustes</a></li>
                <li><a href="ayuda">Ayuda</a></li>
                <li><a href="terminos">Terminos y Reglamentos</a></li>
                <li><a href="login">Inicio de sesion</a></li>
            </ul>
        </div>
    </nav>
    <div class="CuerpoPagina">
        <?php echo $__env->yieldContent('menu'); ?>
    </div>
</body>
</html>
<?php /**PATH C:\Users\cante\OneDrive\Escritorio\Proyecto\INVENTARIO-INFO1170\Proyecto\resources\views/menu.blade.php ENDPATH**/ ?>