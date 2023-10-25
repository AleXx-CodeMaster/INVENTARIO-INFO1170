@extends('menu')

@section('menu')
<title>Codigo De Barra</title>
<div class="CuerpoPagina">
    <header><h1 class="tittle">Lectura de Barra</h1></header>
    <div class="Contedor__Barra">
        <form action="" method="POST">
            @csrf
            <label for="id">ID:</label>
            <input type="text" name="id" id="id" required>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/L_Barra.css')}}">
@endsection
