const menu = document.querySelector('.Menu')
menu.innerHTML = `
<button id="Boton__Menu"onclick="cambiarTamano()">Cambiar tamaño del bloque 1</button>
<div id="menu__Parte Uno">
    <img id="ImagenUsuario" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQL-YDLwDpdjFxnqI9CgnAH3nBDTc3NEp9UA&usqp=CAU" alt="Imagen del usuario" width="40px"> <!--Usar una funcion con java scrpit , para cabaiar la imagen , he ir actualizando-->
    <div id="bloque_informativo">
        <ul>
            <li>User:      <span id="NombreUsuaario">Joaquin Cantero Olivera</span></li>
            <li>Localhost: <span id="NombreEmpresa">Cansue</span></li>
            <li>Formato    <span id="TipoEntrada">  Admin/Colaborador</span></li>
            <li>Codigo:    <span id="CodigoRutaBd"> #00001</span></li>
        </ul>
    </div>
</div>
<hr>
<div id="menu__Parte Dos">
    <ul class="Seleccion Uno">
        <li> <a>Home</a> </li>
        <li> <a>---Paginas Admin or Empleado--</a> </li>
       <li> <a>------------------------------</a> </li>
       <li> <a>------------------------------</a> </li>
    </ul>
    <ul class="Seleccion Dos">
        <li> <a>Ajustes</a> </li>
        <li> <a>Mas sobre nosotros</a></li>
        <li> <a>Ayuda</a></li>
        <li> <a>Termino y reglamentos</a></li>
    </ul>
</div>
`
var bloqueGrande = true;

function cambiarTamano() {
  var body = document.getElementById("body");
  const menu = document.querySelector('.Menu')
  
  if (bloqueGrande) {
    body.style.gridTemplateColumns = "20px auto";
    bloqueGrande = false;
    menu.innerHTML = `
        <button id="Boton__Menu"onclick="cambiarTamano()">Cambiar tamaño del bloque 1</button>
    `
  } else {
    body.style.gridTemplateColumns = "20rem auto";
    bloqueGrande = true;
    menu.innerHTML += `
                        <div id="menu__Parte Uno">
                        <img id="ImagenUsuario" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQL-YDLwDpdjFxnqI9CgnAH3nBDTc3NEp9UA&usqp=CAU" alt="IMG USER" width="40px">
                        <div id="bloque_informativo">
                            <ul>
                                <li>User:      <span id="NombreUsuaario">Joaquin Cantero Olivera</span></li>
                                <li>Localhost: <span id="NombreEmpresa">Cansue</span></li>
                                <li>Formato    <span id="TipoEntrada">  Admin/Colaborador</span></li>
                                <li>Codigo:    <span id="CodigoRutaBd"> #00001</span></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div id="menu__Parte Dos">
                        <ul class="Seleccion Uno">
                            <li> <a>Home</a> </li>
                            <li> <a>---Paginas Admin or Empleado--</a> </li>
                        <li> <a>------------------------------</a> </li>
                        <li> <a>------------------------------</a> </li>
                        </ul>
                        <ul class="Seleccion Dos">
                            <li> <a>Ajustes</a> </li>
                            <li> <a>Mas sobre nosotros</a></li>
                            <li> <a>Ayuda</a></li>
                            <li> <a>Termino y reglamentos</a></li>
                        </ul>
                    </div>
                    `
  }

}