<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de Registro</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/Estructura.css')}}">
    <link rel="stylesheet" href="{{asset('css/Formularios.css')}}">
    <link rel="stylesheet" href="{{asset('css/Pagina.css')}}">
    <link rel="stylesheet" href="{{asset('css/TABLA.css')}}">
</head>
<body id="body">
    <nav class="Menu"></nav>
    <div class="Cuerpo__Pagina">
        <header id="Encabezado"><h1>Panel de Actividad</h1></header>
        <div class="PANEL__BUTTON">
            <div class="Search">
                <form action="Buscar">
                    <input id="Buscador" type="text" class="Selector" placeholder="Buscar Registro">
                    <input id="icon"type="submit" >
                </form>
            </div>
        </div>

        <div class="TABLA__DATOS">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>Fecha</th>

                            <th>Tipo de Evento</th>
                            <th>Descripción</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="tr-shadow">
                            <td>1 de julio 2004</td>
                            <td><span>Eliminacion</span></td>
                            <td><span>5 trabjadores</span> </td>
                            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                                <div class="BOTONES_SELECCION">
                                    <button id="EliminarDato" title="Delete">    </button>
                                    <button id="More"        title="More">      </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                        <tr class="tr-shadow">
                            <td>1 de julio 2004</td>
                            <td><span>Eliminacion</span></td>
                            <td><span>5 trabjadores</span> </td>
                            <td><!--ITEM-compartir-modificar-eliminar-másInformación--->
                                <div class="BOTONES_SELECCION">
                                    <button id="EliminarDato" title="Delete">    </button>
                                    <button id="More"        title="More">      </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>

    <script src="js/menu_administrador.js"></script>
    <!-- <script src="../JavaScript/menu_empleado.js"></script> -->
</body>
</html>
