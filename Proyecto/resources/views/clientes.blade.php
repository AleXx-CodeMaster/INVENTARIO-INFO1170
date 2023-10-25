@extends('menu')

@section('menu')
<title>Clientes</title>
<div class="CuerpoPagina">
    <header class="tittle">
        <h1>Clientes</h1>
        <hr>
    </header> <br>
    <div class="add">
        <input type="submit" value="Cliente Nuevo">
    </div> <br> <br> <br>
    <nav class="busqueda">
        <input type="submit" name="" id="" value="Buscar por nombre">
        <input type="submit" name="" id="" value="Buscar por correo">
        <input type="submit" name="" id="" value="Buscar por telefono">
    </nav>
    <a href="{{route('clientes.create')}}" class="button">Agregar un cliente a la base de datos</a>
    <section class="proovedorses">
        <header class="prov-dat">
        </header>
        <div class="prov2">
            <table class="table-prov2">
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                </tr>
            </table>
        </div>
        <div class="prov">
            <table class="table-prov">
                @foreach($clientes as $cliente)
                <tr>
                    <th>{{$cliente->ID_C}}</th>    
                    <th>{{$cliente->Nombre}}</th>
                    <th>{{$cliente->Correo}}</th>
                    <th>{{$cliente->Telefono}}</th>
                    <th>{{$cliente->Direccion}}</th>
                </tr>
                @endforeach
                <!-- <tr>
                    <th>Joaquin</th>
                    <th>canteroxx92@gmail.com</th>
                    <th>Balmaceda194</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr> -->
                <!-- <tr>
                    <th>Joaquin</th>
                    <th>+56928188128</th>
                    <th>Pastor Oscar Alarcon 181</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr> -->
                <!-- <tr>
                    <th>Joaquin</th>
                    <th>+56928188128</th>
                    <th>Pastor Oscar Alarcon 181</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr> -->
            </table>
        </div>
    </section>
    <!-- <h1>{{$clientes}}</h1>  -->
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('css/clientes.css')}}">
@endsection
