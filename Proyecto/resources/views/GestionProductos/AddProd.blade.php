@extends('menu')

@section('menu')
<section class='add'>
	<form action="{{route('productos.guardar')}}" method='POST'>
		@csrf
		<input type="number" id="id" name="ID_I">
		<input type="text" id='Nombre' name='Nombre'>
		<input type="text" id="Tipo_prod" name="Tipo de producto">
		<input type="number" id='Ex_Inicial' name='Existencia Inicial'>
		<input type="number" id='Ex_Actual' name='Existencia Actual'>
		<input type="text" id='Categoria' name='Categoria'>
		<input type="file" name="img" id="img">
		<input type="text" id='Descripcion' name='Descripcion'>
		<input type="date" id="Fecha_Entry" name="Fecha de entrada">
		<input type="submit">
	</form>
</section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
@endsection
