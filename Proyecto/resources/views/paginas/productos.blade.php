@extends('menu')

@section('menu')
<title>Productos</title>
<div class="CuerpoPagina">
    <header class="tittle">
        <h1>Productos</h1>
        <hr>
    </header> <br>
    <div class="add">
        <a href="{{route('productos.agregar')}}">Agregar Producto</a>
    </div> <br> <br> <br>
    <nav class="busqueda">
        <div class="NameCat">
            <input type="submit" value="Buscar por Categoria">
            <input type="submit" value="Buscar por Nombre">
        </div> <br>
        <select name="" id="">
            <option value="">Filtrar Categoria</option>
        </select>
    </nav> <br>
    <section class="proovedores">
        <header class="prov-dat">
        </header>
        <div class="prov2">
            <table class="table-prov2">
                <tr>
                    <th class="izq">Categoria</th>
                    <th class="izq">Nombre</th>
                    <th class="izq">Informacion</th>
                    <th class="der">Editar</th>
                    <th class="der">Eliminar</th>
                </tr>
            </table>
        </div>
        <div class="prov">
            <table class="table-prov">
                @foreach($productos as $producto)
                <tr>
                    <th>{{$producto->Nombre}}</th>
                    <th>{{$producto->Cantidad}}</th>
                    <th>{{$producto->Tipo_Producto}}</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
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
    <!-- <h1>{{$productos}}</h1>  -->
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/productos.css')}}">
@endsection
