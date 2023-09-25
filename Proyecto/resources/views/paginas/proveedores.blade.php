@extends('menu')

@section('menu')
    <header class="tittle">
        <h1>Proveedores</h1>
        <hr>
    </header>
    <div>
        <input type="submit" name="" id="" value="Nuevo Proovedor">
    </div> <br>
    <nav class="busqueda">
        <input type="submit" name="" id="" value="Buscar por nombre">
        <input type="submit" name="" id="" value="Buscar por correo">
        <input type="submit" name="" id="" value="Buscar por telefono">
    </nav>
    <section class="proovedores">
        <div class="nav-prov">
            <p>Nombre</p>
            <p>Correo Electronico</p>
            <p>Telefono</p>
            <p>Direccion</p>
            <p>Editar</p>
            <p>Eliminar</p>
        </div>
        <div class="prov">
            <table>
                <tr>
                    <th>Ejemplo</th>
                </tr>
                <tr>
                    <th>Hola</th>
                </tr>
            </table>
        </div>
    </section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/proveedores.css')}}">
@endsection
