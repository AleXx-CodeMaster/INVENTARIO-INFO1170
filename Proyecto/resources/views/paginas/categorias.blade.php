@extends('menu')

@section('menu')
<title>Categorias</title>
<header class="tittle">
    <h1>Categorias</h1>
    <hr>
</header>
<div>
</div> <br>
<div class="add">
    <input type="submit" value="Nueva Categoria">
</div> <br> <br> <br>
<nav class="busqueda">
    <input type="submit" name="" id="" value="Buscar por nombre">
</nav>
<section class="proveedores">
    <header class="prov-dat">
    </header>
    <div class="prov2">
        <table class="table-prov2">
            <tr>
                <th>Nombre</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </table>
    </div>
    <div class="prov">
            <table class="table-prov">
                <tr>
                    <th>Joaquin</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr>
            </table>
    </div>
</section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/categorias.css')}}">
@endsection
