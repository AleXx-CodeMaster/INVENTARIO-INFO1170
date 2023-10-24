@extends('menu')

@section('menu')
<title>Productos</title>
<div class="CuerpoPagina">
    <header class="tittle">
        <h1>Productos</h1>
        <hr>
    </header> <br>
     <br> <br> <br>
    <nav class="busqueda">
        <div class="NameCat">
            <input type="submit" value="Buscar por Categoria">
            <input type="submit" value="Buscar por Nombre">
        </div><br>
        <select name="" id="">
            <option value="">Filtrar Categoria</option>
        </select>
    </nav> <br>
    <a href="{{route('productos.prodcreate')}}" class="botton">Ingresar un producto</a>
    <section class="proovedores">
        <header class="prov-dat">
        </header>
        <div class="prov2">
            <table class="table-prov2">
                <tr>
                    <th class="izq">ID</th>
                    <th class="izq">Imagen</th>
                    <th class="izq">Nombre</th>
                    <th class="izq">Cantidad</th>
                    <th class="der">Categoria</th>
                    <th class="der">Precio</th>
                    <th class="der">Editar</th>
                </tr>
            </table>
        </div>
        <div class="prov">
            <table class="table-prov">
                @foreach($items as $item)
                <tr>
                    <th>{{$item->ID_I}}</th>    
                    <th>{{$item->img}}</th>
                    <th>{{$item->Nombre}}</th>
                    <th>{{$item->Ex_Actual}}</th>
                    <th>{{$item->Categoria}}</th>
                    <th>{{$item->Precio_V}}</th>
                    <th><a href="{{route('productos.edit', $items) }}" class="button">Aqui</a></th>
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
    <!-- <h1>{{$items}}</h1>  -->
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/productos.css')}}">
@endsection