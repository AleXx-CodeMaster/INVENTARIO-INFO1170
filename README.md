# INVENTARIO-INFO1170

Ubicacion de las Paginas

Proyecto/resources/views/


Cada pagina tiene esta escritura

# esto lo que hace es llamar al meno desplegable que tenemos y lo va a dejar quieto en la parte de la izquierda
@extends('menu')

@section('menu')
# aqui va el contenido de la pagina
@endsection
# esto va a llamar al css de la pagina
@section('css')
    <link rel="stylesheet" href="{{asset('css/')}}">
@endsection

La ubicacion de estos css estan en la siguiente Ruta
Proyecto/public/css

ahi tambien puedes subir los json y los js