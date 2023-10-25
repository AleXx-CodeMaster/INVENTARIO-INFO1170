<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectura de barra</title> 
    <link rel="stylesheet" href="New_Style.css">
    <link rel="stylesheet" href="y_estilo.css">
    <link rel="stylesheet" href="L_Barra.css">
</head>
<body>
    <nav class="MenuIzq"><!--Lugar donde esta el menu--></nav>
    <div class="CuerpoPagina">
        <header><h1 class="tittle">Lectura de Barra</h1></header>
        <div class="Contedor__Barra">
            <form action="{{ route('procesar.formulario') }}" method="POST">
                @csrf
                <label for="id">ID:</label>
                <input type="text" name="id" id="id" required>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>