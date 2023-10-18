@extends('menu')

@section('menu')
<section class='add'>
	<form action="{{route('productos.guardar')}}" method='POST'>
		@csrf
		<input type="number" id='id' name='id'>
		<input type="text" id='Nombre' name='Nombre'>
		<input type="number" id='Cantidad' name='Cantidad'>
		<input type="text" id='Tipo_Producto' name='Tipo_Producto'>
		<input type="submit">
	</form>
</section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
@endsection
