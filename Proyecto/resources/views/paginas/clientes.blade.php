@extends('menu')

@section('menu')
<title>Clientes</title>
<div class="CuerpoPagina">
    <header class="tittle">
        <h1>Clientes</h1>
        <hr>
    </header> <br>
    <nav class="busqueda">
        <input type="submit" name="" id="" value="Buscar por nombre">
        <input type="submit" name="" id="" value="Buscar por correo">
        <input type="submit" name="" id="" value="Buscar por telefono">
    </nav>
    <section class="proovedores">
        <header class="prov-dat">
        </header>
        <div class="prov2">
            <table class="table-prov2">
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </table>
        </div>
        <div class="prov">
            <table class="table-prov">
                <tr>
                    <th>Joaquin</th>
                    <th>canteroxx92@gmail.com</th>
                    <th>+56963028619</th>
                    <th>Balmaceda194</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr>
                <tr>
                    <th>Joaquin</th>
                    <th>canteroxx92@gmail.com</th>
                    <th>+56928188128</th>
                    <th>Pastor Oscar Alarcon 181</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr>
            </table>
        </div>
    </section>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/clientes.css')}}">
@endsection
