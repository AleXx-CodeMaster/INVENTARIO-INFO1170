@extends('menu')

@section('menu')
<section class='add'>
	<form action="{{route('productos.guardar')}}" method='POST'>
		@csrf
		<input type="text" id='Nombre' name='Nombre'>
		<input type="number" id='Cantidad' name='Cantidad'>
		<input type="text" id='Categoria' name='Categoria'>
		<input type="file" name="img" id="img">
		<input type="text" id='Descripcion' name='Descripcion'>
		<input type="submit">
	</form>
</section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
@endsection
