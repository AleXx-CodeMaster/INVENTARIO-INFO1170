<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/Menu.css')}}">
    <title>Login</title>
</head>
<body>
    <details class="">
        <summary>Click para expandir</summary>
            <nav class = 'Part1_Menu'>
                <img id = 'ImagenUsuario' src = "https://leadsales.io/wp-content/uploads/2023/05/users-leadsales.webp" alt="Imagen del usuario" > <!--Usar una funcion con java scrpit , para cabaiar la imagen , he ir actualizando-->
                <p id = 'NomEmp'> Empresa: <span id = 'NomEmpr'>...Nombre de la empresa </span></p> <!-- usar una funcio con java escrip , para poder cambiar el nombre-->
                <p id = 'NomEnc'> Encargado: <span id = 'NomCargo'>...............</span></p>  <!--Usar una funcion de actualizar-->
                <button id = 'B_configuracion'><a href='configuracion.html'>Configuración V</a></button><hr> <!--usar una funcion para que diriga la nueva ruta , de la sig pagina-->
                <ul>
                    <details><summary><a href="">MENU PRINCIPAL</a></summary></details> <br>
                    <details><summary><a href="Clientes">CLIENTES</a></summary></details> <br>
                    <details>
                        <summary>GESTION DE PRODUCTOS</summary>
                    <ul><br>
                        <li><a href="GestionDeProductos/Categorias">Categorias</a></li>
                        <li><a href="">Productos</a></li>
                        <li><a href="">Provedores</a></li>
                    </ul>
                    </details> <br>
                    <details>
                        <summary>GESTION DE EXISTENCIAS</summary>
                    <ul><br>
                        <li><a href="">Entrada</a></li>
                        <li><a href="">Salida/Factura</a></li>
                    </ul>
                    </details><br>
                    <details><summary><a href="">GRAFICA</a></summary></details> <br>
                    <details><summary><a href="">CALENDARIO</a></summary></details> <br>
                    <details><summary><a href="">AYUDA</a></summary></details> <br>
                    <details><summary><a href="">MÁS SOBRE</a></summary></details> <br>
                </ul>
            </nav>
      </details>

            @yield('menu')
</body>
</html>
