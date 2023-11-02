var contenidoA3 = document.querySelector('.TERMINOS_C')
function Traer(){
    fetch('TERminosCON.json')
        .then( res => res.json())
        .then( datos =>{
            Lista(datos)
        })
}
function Lista(datos){
    contenidoA3.innerHTML = ''
    for(let valor of datos){
        contenidoA3.innerHTML += `
        <li>
            <h4 id="h4">${valor.Condicion}</h4>
            <P>${valor.Detalles}</p>
        </li> 
        `
    }
}
Traer()