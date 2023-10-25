<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminos y Condiciones</title>
    <link rel="stylesheet" href="New_Style.css">
    <link rel="stylesheet" href="y_estilo.css">
    <link rel="stylesheet" href="Stilo.css">
</head>
<body>
    <nav class="MenuIzq"><!--Codido de el menu que alla--></nav>
    <div class="CuerpoPagina">
        <header> <h1 class="tittle"> Terminos&Condiciones</h1>
                 <h3 id="h3">Reglamentos de NexuIventory</h3></header>
        <section class="Reglamentos">
            <div id="Informacion">
                <ul class="contenido_list">
                </ul>
            </div>
            <div>
                <p id="Info"> Al utilizar la plataforma de gestión de inventario de NexusInventori, usted acepta estar sujeto a estos términos y condiciones. Si no está de acuerdo con alguno de estos términos, le recomendamos que no utilice nuestros servicios. Si tiene alguna pregunta o inquietud, no dude en ponerse en contacto con nosotros. </p>
            </div>
        </section>
    </div>
    <script>
        var contenidoA3 = document.querySelector('.contenido_list')
        function Traer(){
            fetch('Terminos_condiciones.json')
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
    </script>
</body>
</html>