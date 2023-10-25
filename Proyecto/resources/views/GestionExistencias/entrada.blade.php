@extends('menu')

@section('menu')
<div class="CuerpoPagina">
        <div class="G-Entrada">
            <header class="prov-dat"> <h1 class="titulo">Gestion de entrada</h1></header>
            <button id="BotonExistencia">Nueva Existencia + </button>
            <form>
                <select class="Selector"><option value="Productos">Todos los productos</option>
                    <option value="Producto"></option></select>  <!-- Estos opciones , se ligaran a la base de datos , luego a un javascript , para manipulacion de eventos-->
                <select class="Selector"><option value="">Todas las categorias</option>
                    <option value="Categoria"></option></select>  <!-- Estos opciones , se ligaran a la base de datos , luego a un javascript , para manipulacion de eventos-->
                <select class="Selector"><option value="">Todos los provedores</option>
                    <option value="Provedores"></option></select>  <!-- Estos opciones , se ligaran a la base de datos , luego a un javascript , para manipulacion de eventos-->
            </form>
            <hr>
            <!-- tabla  
                </table>-->
            <div id="ContTablas">  
                <table class="tabla">
                    <thead>
                        <tr>
                            <th >Id</th> 
                            <th >Categoria</th>
                            <th >Producto</th>
                            <th >Proovedor</th>
                            <th >Comprobante</th>
                            <th >Existencia Inicial</th>
                            <th >Existencia Actual</th>
                            <th >Precio de Compra</th>
                            <th >Precio de venta</th>
                            <th >Entrada por</th>
                            <th>Fecha de Entrada</th>
                            <th >Agregar</th>
                            <th >Editar</th>
                            <th> Eliminar</th>

                        </tr>
                    </thead>
                    <tbody id="ContenedorDatos">
                        <tr >
                            <th >1</th>
                            <td> dato_Cat </td>
                            <td> dato_Produ</td>
                            <td> dato_</td>
                            <td> dato </td>
                            <td> dato </td>
                            <td> dato </td>
                            <td> dato </td>
                            <td> dato </td>
                            <td> dato </td>
                            <td> dato </td>
                            <td><button id="AgregarDato"></button></td>
                            <td><button id="EditarDato"></button></td>
                            <td><button id="EliminarDato"></button> </td>        
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/y_estilo.css')}}">
    <link rel="stylesheet" href="{{asset('css/New_style.css')}}">
@endsection
