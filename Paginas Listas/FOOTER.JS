const Pie__de__Pagina = document.querySelector('.PIE_PAGINA')
const Estilo__Footer = document.querySelector('head')
Estilo__Footer.innerHTML += `
<link rel="stylesheet" href="FOOTER.CSS">
`
Pie__de__Pagina.innerHTML =`
<footer class="FOOTER">
<div class="footer-content">
    <h5>NEXUSINVENTORY</h5>
    <P>Es una aplicación que busca ayudar a las empresas y/o tiendas a tener un inventario más organizado. Cuyo
        objetivo es garantizar un área de Trabajo más cómodo y fácil de usar.
    </p></div>
<div class="footer-Contactanos">
    <h6 id="Redes">CONTACTANOS</h6>
    <p>Sí tiene más interes sobre nosotros , nos puedes encontras en estás redes sociales.</p>
    <ul class="socials">
        <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/4494/4494495.png" alt="">+56 9000 9194</a></li>
        <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/2504/2504903.png" alt="">NEXUSINVENTORY 373</a></li>
        <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/128/732/732200.png" alt="">nexuinvetory.373@gamil.com</a></li>
        <li><a href="#"><img src="https://cdn.icon-icons.com/icons2/2108/PNG/96/discord_icon_130958.png" alt="">Nexuinvetory #373</a></li>
    </ul></div>
<div class="footer-bottom"><p>© 2023 NEXUSINVENTORY <span id="Tfa"> ordena tu futuro<a href="#">Terminos y Codiciones</a>.</span></p></div>
</footer>
` 
