<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <script src="js/login.js"></script>
    <title>INICIO DE SESION Y REGISTRO</title> <!-- Título de la página -->
</head>
<body>
    <header id="cabecera">
        <ul>
            <li><a href="home" class="active">Menu</a></li>
            <li class="menu-item">
                <a href="#" class="active">Acerca de Nosotros</a>
                <div class="dropdown-content">
                    <!-- Contenido del menú desplegable -->
                    <p style="font-weight: 600; font-size: 25px;">¿Quienes Somos?</p>

                        <p>Somos un equipo de trabajo comprometido con la innovación y la eficiencia empresarial.
                        En INVENTARIO, Como grupo de estudiantes dedicados y apasionados que comparten una visión común:
                        simplificar y optimizar la gestión de Productos para empresas de todas las industrias y tamaños.</p>

                        <p>En INVENTARIO, nos enorgullece ser un equipo de trabajo que abraza la innovación y la eficiencia empresarial como nuestros principales pilares.
                        Somos más que un grupo de estudiantes; somos un conjunto de individuos apasionados y dedicados que han unido sus fuerzas con una visión compartida:
                        poner en práctica nuestros conocimientos y habilidades técnicas para construir una plataforma de gestión de productos que sea accesible, poderosa y versátil.
                        Nos comprometemos a brindar a las empresas la herramienta que necesitan para gestionar sus productos de manera más eficiente, ahorrar tiempo y recursos, y fomentar el crecimiento.</p>

                        <p>Estamos aquí para brindarle soporte continuo y actualizaciones periódicas para asegurarnos de que su experiencia
                        con nuestra plataforma siga siendo efectiva a lo largo del tiempo.</p>
                </div>
            </li>
            <li class="menu-item">
                <a href="#" class="active">Contactanos</a>
                <div class="dropdown-content">
                    <!-- Contenido del menú desplegable -->
                    <p style="font-weight: 600; font-size: 25px;">Nuestros Numeros de Contacto:</p>
                    <p>MESA CENTRAL: 999 9999 9999 <br>
                       TELÉFONO: 0002 0001 0003
                    </p>
                </div>
            </li>
        </ul>
    </header>
    <div class="section">
        <!-- Contenedor principal de la página -->
        <div class="container">
            <!-- Contenedor secundario para el contenido -->
            <div class="content-center">
                <!-- Contenedor para centrar el contenido verticalmente -->
                <div class="align-self-center">
                    <!-- Contenedor para alinear el contenido en sí mismo -->
                    <div class="text-center">
                        <!-- Contenedor para el contenido centrado en el texto -->
                        <h6 class="mb-0 pb-3"><span>INICIAR SESIÓN </span><span>REGÍSTRESE</span></h6>
                        <!-- Encabezado con dos enlaces -->
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
                        <!-- Casilla de verificación -->
                        <label for="reg-log"></label>
                        <!-- Etiqueta asociada a la casilla de verificación -->
                        <div class="card-3d-wrap mx-auto">
                            <!-- Envoltorio para una tarjeta 3D, centrado horizontalmente -->
                            <div class="card-3d-wrapper">
                                <!-- Envoltorio de la tarjeta 3D -->
                                <div class="card-front">
                                    <!-- Frente de la tarjeta -->
                                    <div class="center-wrap">
                                        <!-- Envoltorio para centrar contenido -->
                                        <div class="section text-center">
                                            <!-- Sección para el contenido -->
                                            <h4 class="mb-4 pb-3">Inicia Sesión</h4>
                                            <!-- Encabezado para la sección de inicio de sesión -->
                                            <div class="form-group">
                                                <!-- Grupo de formulario para el correo electrónico -->
                                                <input type="email" name="logemail" class="form-style" placeholder="Su correo electrónico" id="logemail" autocomplete="off">
                                                <!-- Campo de entrada para el correo electrónico -->
                                                <i class="input-icon uil uil-at"></i>
                                                <!-- Icono de correo electrónico -->
                                            </div>
                                            <div class="form-group mt-2">
                                                <!-- Grupo de formulario para la contraseña -->
                                                <input type="password" name="logpass" class="form-style" placeholder="Su contraseña" id="logpass" autocomplete="off">
                                                <!-- Campo de entrada para la contraseña -->
                                                <i class="input-icon uil uil-lock-alt"></i>
                                                <!-- Icono de candado -->
                                            </div>
                                            <a href="#" class="btn mt-4">Ingresar</a>
                                            <!-- Enlace para enviar el formulario de inicio de sesión -->
                                            <p class="mb-0 mt-4 text-center"><a href="contraseña" class="link">Olvidó Su Contraseña?</a></p>
                                            <!-- Párrafo con enlace para recuperar contraseña -->
                                            <p class="mb-0 mt-4 text-center"><a href="registro" class="link">Deseas registrar una empresa?</a></p>
                                            <!-- Párrafo con enlace para registro de empresa -->
                                            <p class="mb-0 mt-4 text-center"><a href="parte" class="link">Eres parte de una empresa?</a></p>
                                            <!-- Párrafo con enlace para pertenecer a una empresa -->
                                        </div>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <!-- Parte posterior de la tarjeta -->
                                    <div class="center-wrap">
                                        <!-- Envoltorio para centrar contenido -->
                                        <div class="section text-center">
                                            <!-- Sección para el contenido -->
                                            <h4 class="mb-4 pb-3">Regístrate</h4>
                                            <!-- Encabezado para la sección de registro -->
                                            <div class="form-group">
                                                <!-- Grupo de formulario para el nombre completo -->
                                                <input type="text" name="logname" class="form-style" placeholder="Su nombre completo" id="logname" autocomplete="off">
                                                <!-- Campo de entrada para el nombre completo -->
                                                <i class="input-icon uil uil-user"></i>
                                                <!-- Icono de usuario -->
                                            </div>
                                            <div class="form-group mt-2">
                                                <!-- Grupo de formulario para el correo electrónico -->
                                                <input type="email" name="logemail" class="form-style" placeholder="Su correo electrónico" id="logemail" autocomplete="off">
                                                <!-- Campo de entrada para el correo electrónico -->
                                                <i class="input-icon uil uil-at"></i>
                                                <!-- Icono de correo electrónico -->
                                            </div>
                                            <div class="form-group mt-2">
                                                <!-- Grupo de formulario para la contraseña -->
                                                <input type="password" name="logpass" class="form-style" placeholder="Su contraseña" id="logpass" autocomplete="off">
                                                <!-- Campo de entrada para la contraseña -->
                                                <i class="input-icon uil uil-lock-alt"></i>
                                                <!-- Icono de candado -->
                                            </div>
                                            <div class="form-group mt-2">
                                                <!-- Grupo de formulario para repetir la contraseña -->
                                                <input type="password" name="logpass" class="form-style" placeholder="Repetir contraseña" id="logpass" autocomplete="off">
                                                <!-- Campo de entrada para repetir la contraseña -->
                                                <i class="input-icon uil uil-lock-alt"></i>
                                                <!-- Icono de candado -->
                                            </div>
                                            <a href="#" class="btn mt-4">Ingresar</a>
                                            <!-- Enlace para enviar el formulario de registro -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="images/icon.png" alt="logo de inventario">
</body>
</html>

