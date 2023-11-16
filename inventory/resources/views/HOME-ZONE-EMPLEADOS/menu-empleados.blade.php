<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/HOME.css')}}">
    <title>Home</title>
</head>
<body>
    <header>
        <nav class="Menu__Barra">
            <ul>
                <li><img id="LOGO"src="images/IconNexus.png" alt="Nexuinvetory"></li>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ÁREA DE TRABAJO</a></li>
                <li><a href="#">CALENDARIO</a></li>
                <li><a href="../Paginas/cotanctanos.html">CONTACTANOS</a></li>
                <li><a href="../Paginas/ayuda.html">AYUDA</a></li>
                <li ><a href="#">CONFIGURACIÓN</a></li>
                <li> <a href="../Paginas/Mas_NEXU.html"></a>...</li>
                <li><form action="Buscador__Gereral.php">
                    <input type="text"name="Buscador" id="Buscador" placeholder="Buscador">
                    <input id="icon"type="submit" >
                    </form>
                </li>
                <li></li>
            </ul>
        </nav>
    </header>
    <div class="BODY_AREA">
        <div class="Area__Buscador">
            <section>
                <h2>Bienvenido a <span>NEXUSINVENTORY</span></h2>
                <p>"Mensaje dirigido a los usauarios"</p>
            </section>
        </div>
        <div class="Area__Seleccion"></div>
        <div class="Area__Especial"> <!--Panel__especial-->
        </div>
    </div>
    <footer class="FOOTER">
        <div class="footer-content">
            <h5>NEXUSINVENTORY</h5>
            <P>Es una aplicación que busca ayudar a las empresas y/o tiendas a tener un inventario más organizado. Cuyo
                objetivo es garantizar un área de Trabajo más cómodo y fácil de usar.
            </p></div>
        <div class="footer-Contactanos">
            <h6>Nuestras redes:</h6>
            <ul class="socials">
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/4494/4494495.png" alt="">+56 9000 9194</a></li>
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/2504/2504903.png" alt="">NEXUSINVENTORY</a></li>
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/732/732200.png" alt="">nexuinvetory.373@gamil.com</a></li>
                <li><a href="#"><img src="https://cdn.icon-icons.com/icons2/2108/PNG/96/discord_icon_130958.png" alt="">Nexuinvetory #373</a></li>
            </ul></div>
        <div class="footer-bottom"><p>© 2023 NEXUSINVENTORY <span id="Tfa"> ordena tu futuro<a href="../Paginas/TERminosCON.html">Terminos y Codiciones</a>.</span></p></div>
    </footer>
    <script src="js/HOMEempl.js"></script>
    <!-- <script src="HOMEempl.js"></script> -->
    <script src="HOMEPANELespecial.js"></script>
</body>
</html>
