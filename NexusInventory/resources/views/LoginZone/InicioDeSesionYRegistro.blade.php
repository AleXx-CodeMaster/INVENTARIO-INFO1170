<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/InicioDeSesionRegistro.css')}}">
    <script  src="{{ asset('js/login.js') }}"></script>
    <script  src="{{ asset('js/route.js') }}"></script>
    <title>INICIO DE SESION Y REGISTRO</title> <!-- Título de la página -->
</head>
<body>
    <header id="cabecera">
        <ul>
            <li><a href="{{route('inicio')}}" class="active">Inicio</a></li>
            <li class="menu-item">
                <a href="#" class="active">Acerca de Nosotros</a>
                <div class="dropdown-content">
                    <!-- Contenido del menú desplegable -->
                    <p style="font-weight: 600; font-size: 25px;">¿Quienes Somos?</p>

                        <p>Somos un equipo de trabajo comprometido con la innovación y la eficiencia empresarial.
                        En NEXUSINVENTORY, Como grupo de estudiantes dedicados y apasionados que comparten una visión común:
                        simplificar y optimizar la gestión de Productos para empresas de todas las industrias y tamaños.</p>

                        <p>En NEXUSINVENTORY, nos enorgullece ser un equipo de trabajo que abraza la innovación y la eficiencia empresarial como nuestros principales pilares.
                        Somos más que un grupo de estudiantes; somos un conjunto de individuos apasionados y dedicados que han unido sus fuerzas con una visión compartida:
                        poner en práctica nuestros conocimientos y habilidades técnicas para construir una plataforma de gestión de productos que sea accesible, poderosa y versátil.
                        Nos comprometemos a brindar a las empresas la herramienta que necesitan para gestionar sus productos de manera más eficiente, ahorrar tiempo y recursos, y fomentar el crecimiento.</p>

                        <p>Estamos aquí para brindarle soporte continuo y actualizaciones periódicas para asegurarnos de que su experiencia
                        con nuestra plataforma siga siendo efectiva a lo largo del tiempo.</p>
                </div>
            </li>
            <li class="menu-item">
                <a href="#" class="active">Contáctanos</a>
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

                        <!-- link ocultos para funcionalidad del ckeckbox -->
                        <a href="/login" id="login-link"></a>
                        <a href="/login2" id="login2-link" style="display: none;"></a>

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
                                            <form action="{{ route('login.store') }}" method="POST">
                                            @csrf
                                                <div class="form-group">

                                                    <!-- Grupo de formulario para el correo electrónico -->
                                                    <input type="email" name="logemail" class="form-style" placeholder="Su correo electrónico" id="logemail" autocomplete="off">

                                                    <!-- Grupo de formulario para la contraseña -->
                                                    <input type="password" name="logpass" class="form-style" placeholder="Su contraseña" id="logpass" autocomplete="off">
                                                </div>
                                                <button  type="submit" class="btn mt-4">Ingresar</button>

                                            </form>

                                            <!-- Enlace para enviar el formulario de inicio de sesión -->
                                            <p class="mb-0 mt-4 text-center"><a href="cambioContraseña" class="link">Deseas realizar un cambio de contraseña?</a></p>

                                            <!-- Párrafo con enlace para recuperar contraseña -->
                                            <p class="mb-0 mt-4 text-center"><a href="RegistraTuEmpresa" class="link">Deseas registrar una empresa?</a></p>

                                            <!-- Párrafo con enlace para registro de empresa -->

                                            <p class="mb-0 mt-4 text-center"><a href="InicioDeEmpresa" class="link">Tienes una empresa o Cumples con algún Rol?</a></p>
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
                                            <form action="{{ route('login2.store') }}" method="POST">
                                            @csrf
                                                    <!-- Encabezado para la sección de registro -->
                                                <div class="form-group">
                                                    <!-- Grupo de formulario para el nombre completo -->
                                                    <input type="text" name="logname" class="form-style" placeholder="Ingrese Su Oficio" id="logname" autocomplete="off">
                                                    <!-- Campo de entrada para el nombre completo -->

                                                    <!-- Icono de usuario -->
                                                </div>
                                                <div class="form-group mt-2">
                                                    <!-- Grupo de formulario para el Rut -->
                                                    <input type="number" name="yourut" class="form-style" placeholder="Su Rut (con el dígito verificador)" id="yourut" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                                                    <!-- Campo de entrada para el rut(agregar implementacion de dígito verificador) -->
                                                </div>
                                                <div class="form-group mt-2">
                                                    <!-- Grupo de formulario para el correo electrónico -->
                                                    <input type="email" name="logemail2" class="form-style" placeholder="Su correo electrónico" id="logemail2" autocomplete="off">
                                                    <!-- Campo de entrada para el correo electrónico -->


                                                </div>
                                                <div class="form-group mt-2">
                                                    <!-- Grupo de formulario para la contraseña -->
                                                    <input type="password" name="logpass2" class="form-style" placeholder="Su contraseña" id="logpass2" autocomplete="off">
                                                    <!-- Campo de entrada para la contraseña -->

                                                </div>
                                                <div class="form-group mt-2">
                                                    <!-- Grupo de formulario para repetir la contraseña -->
                                                    <input type="password" name="logpass2" class="form-style" placeholder="Repetir su contraseña" id="logpass2" autocomplete="off">
                                                    <!-- Campo de entrada para repetir la contraseña -->

                                                </div>
                                                <div class="form-group mt-2">
                                                    <!-- Grupo de formulario para la fecha de nacimiento -->
                                                    <input type="date" name="fecha_nacimiento" class="form-style" id="fecha_nacimiento" autocomplete="off">
                                                    <!-- Campo de entrada para la fecha de nacimiento -->
                                                </div>

                                                <div class="form-group mt-2">
                                                    <!-- Grupo de formulario para el nombre completo -->
                                                    <input type="number" name="namework" class="form-style" placeholder="Ingresa El Rut Empresarial" id="namework" autocomplete="off" autocapitalize="characters">
                                                    <!-- Campo de entrada para el nombre completo -->

                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="number" name="Salario" class="form-style" placeholder="Ingresa Tu Salario Empresarial" id="Salario" autocomplete="off">

                                                </div>
                                                <button type="submit" href="#" class="btn mt-4">Registrarse</button>
                                                <!-- Enlace para enviar el formulario de registro -->

                                            </form>

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
    <img src="images/IconNexus.png" alt="logo de inventario">
</body>
</html>

