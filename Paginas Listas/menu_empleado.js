

const menu = document.querySelector('.Menu')
menu.innerHTML = `

<button id="Boton__Menu"onclick="cambiarTamano()"></button>
<div id="menu__Parte Uno">
<img id="ImagenUsuario" src = "https://cdn-icons-png.flaticon.com/128/149/149071.png" alt="Imagen del usuario" > 
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
<div id="menu__Parte-Dos">
<ul class="Seleccion-Uno">
    <li> <a href="#">Home      </a> </li>
    <li> <a href="#">Calendario  </a> </li>
    <li> <a href="#">Categorias  </a> </li>
    <li id="Provedores"></li>
    <li id="Productos"></li>
    <li>  <a href="#">Almacenamiento </a> </li>
    <li>  <a href="#">Contactar  Administrador   </a> </li>
    <li>  <a href="#">Historial       </a> </li>
</ul>
<hr>
<ul class="Seleccion-Dos">
    <li id="ajuste"> <a href="#">Ajustes           </a> </li>
    <li id="ifo"> <a href="#">Mas sobre nosotros</a> </li>
    <li id="ayuda"> <a href="#">Ayuda             </a></li>
    <li id="condicion"> <a href="#">Termino y reglamentos</a></li>
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
        <button id="Boton__Menu"onclick="cambiarTamano()"></button>
    `
  } else {
    body.style.gridTemplateColumns = "20rem auto";
    bloqueGrande = true;
    menu.innerHTML += `
    <div id="menu__Parte Uno">
    <img id="ImagenUsuario" src = "https://cdn-icons-png.flaticon.com/128/149/149071.png" alt="Imagen del usuario" > 
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
    <div id="menu__Parte-Dos">
    <ul class="Seleccion-Uno">
        <li> <a href="#">Home      </a> </li>
        <li> <a href="#">Calendario  </a> </li>
        <li> <a href="#">Categorias  </a> </li>
        <li id="Provedores"></li>
        <li id="Productos"></li>
        <li>  <a href="#">Almacenamiento </a> </li>
        <li>  <a href="#">Conctastar  Adm   </a> </li>
        <li>  <a href="#">Historial       </a> </li>
    </ul>
    <hr>
    <ul class="Seleccion-Dos">
        <li id="ajuste"> <a href="#">Ajustes           </a> </li>
        <li id="ifo"> <a href="#">Mas sobre nosotros</a> </li>
        <li id="ayuda"> <a href="#">Ayuda             </a></li>
        <li id="condicion"> <a href="#">Termino y reglamentos</a></li>
    </ul>
    </div>
                    `
    mas_item()
  }

}

function mas_item(){
    const Productos_list = document.querySelector('#Productos');
    const Provedores_list = document.querySelector('#Provedores');

    Productos_list.innerHTML = `<a href="#">Productos  </a>`;
    Provedores_list.innerHTML = `<a href="#">Proveedores</a>`;

    var bloque_1, bloque = true;

    Productos_list.addEventListener('click', function() {Lista_Productos(this);});
    Provedores_list.addEventListener('click', function() { Lista_Provedores(this);});

    function Lista_Productos(objeto){
        if(bloque_1){
            bloque_1 = false;
            objeto.innerHTML= `
            <a href="#"><span id='P1'>Productos</span></a>
            <ul>
            <li>  <a href="#">Registro Producto </a> </li>
            <li>  <a href="#">Agregar Producto  </a> </li>
            <li>  <a href="#">Eliminar Producto </a> </li>
            </ul>
            `;
            const p = document.querySelector('#P1');
            p.style.color = '#FFEBA7';
        }
        else {
            bloque_1 = true;
            objeto.innerHTML = `<a href="#">Productos</a> `;
        };
    }

    function Lista_Provedores(objeto){
        if(bloque){
            bloque = false;
            objeto.innerHTML= `
            <a href="#"><span id="P2">Proveedores</span></a>
            <ul>
                <li>  <a href="#">Registro Proveedor   </a> </li>
                <li>  <a href="#">Agregar Proveedor    </a> </li>
                <li>  <a href="#">Proveddores posteriores </a> </li>
            </ul>
            `;
            const p = document.querySelector('#P2');
            p.style.color = '#FFEBA7';
        }
        else {
            bloque = true;
            objeto.innerHTML = `<a href="#">Proveedores </a>`;
        };
    }
}

mas_item()