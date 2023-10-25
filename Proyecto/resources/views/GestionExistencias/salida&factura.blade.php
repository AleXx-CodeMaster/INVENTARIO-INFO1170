@extends('menu')

@section('menu')
<title>Salida / Factura</title>
<div class="CuerpoPagina">
        <div class="G-Salida">
            <header class="prov-dat"> <h1 class="titulo">Gestion de existencia: Salida</h1></header>
            <form>
                <input type="number" placeholder="Buscar por numero de factura">
                <input type="text" placeholder="Buscar cliente">
                <input id='Button_Busq'type="submit" value="Buscar">
            </form>
            <hr>
            <!-- tabla  
                </table>-->
            <div id="ContTablas">  
                <table class="tabla">
                    <thead>
                        <tr>
                            <th >Id</th> 
                            <th >Factura</th>
                            <th >Fecha</th>
                            <th >Cliente Monto</th>
                            <th >Total Pagado</th>
                            <th >Debito</th>
                            <th >Precio vendido</th>
                            <th >Medio de Pago</th>
                            <th >Pagos</th>
                            <th >Abonar</th>
                            <th >Imprimir</th>
                            <th >Editar</th>
                            <th >Eliminar</th>
                        </tr>
                    </thead>
                    <tbody id="ContenedorDatos">
                        <tr >
                            <th >Num_id</th>
                            <td> dato</td>
                            <td> dato/td>
                            <td> dato_</td>
                            <td> dato </td>
                            <td> dato </td>
                            <td> dato </td>
                            <td> dato </td>
                            <td><button class="Pagos"></button></td>
                            <td><button class="Abonar"></button></td>
                            <td><button class="Imprimir"></button></td>
                            <td><button id="EditarDato"></button></td> <!--Aca se muestran como id , estos , pero en relaidad son class , luego se cambiara , ya que luego cuado hagamos un api , necesitaremso que cada boton , tenga su id propio , para llamar el dato requerido-->
                            <td><button id="EliminarDato"></button></td>      
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/salida.css')}}">
    <link rel="stylesheet" href="{{asset('css/New_style.css')}}">
@endsection
