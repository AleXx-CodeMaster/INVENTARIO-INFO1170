var contenidoNC = document.querySelector('#encargados')

fetch('Equipo.json')
    .then( res => res.json())
    .then( datos => {
        datos.forEach(dato => { 
            contenidoNC.innerHTML += `
            <div class="Contendor">
                <img src="${dato.Photo}" alt="Img de un Contribuidor" id='imgAutores'>
                <div class="INFORMACION">
                <p id="Nombre">${dato.Nombre}</p>
                <p id="puesto">${dato.Cargo}</p>
                <p id="infor">${dato.Tipo_Contribucion}</p>
                <div>
            </div>
            `
        });
})
