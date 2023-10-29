const Productos_list = document.querySelector('#Productos');
const Provedores_list = document.querySelector('#Provedores');

Productos_list.innerHTML = `<a href="#">Productos  </a>`;
Provedores_list.innerHTML = `<a href="#">Provedores</a>`;

var bloque_1 = true;
var bloque = true;

Productos_list.addEventListener('click', function() {Lista_Productos(this);});
Provedores_list.addEventListener('click', function() { Lista_Provedores(this);});

function Lista_Productos(objeto){
    if(bloque_1){
        bloque_1 = false;
        objeto.innerHTML= `
        <a href="#">Productos</a>
        <ul>
           <li>  <a href="#">Registro Producto </a> </li>
           <li>  <a href="#">Agregar Producto  </a> </li>
           <li>  <a href="#">Eliminar Producto </a> </li>
        </ul>
        `;
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
        <a href="#">Proveedores </a>
        <ul>
            <li>  <a href="#">Registro Proveedor   </a> </li>
            <li>  <a href="#">Información Proveedor</a> </li>
            <li>  <a href="#">Agregar Proveedor    </a> </li>
            <li>  <a href="#">Eliminar Proveedor   </a> </li>
        </ul>
        `;
    }
    else {
        bloque = true;
        objeto.innerHTML = `<a href="#">Proveedores </a>`;
    };
}
