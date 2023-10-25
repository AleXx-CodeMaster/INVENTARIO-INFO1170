@extends('menu')

@section('menu')
<section class='add'>
	<form action="{{route('productos.guardar')}}" method='POST'>
		@csrf
		<input type="text" id='Nombre' name='Nombre'> <br><br>
		<input type="text" id='Tipo_Producto' name='Tipo_Producto'><br><br>
		<input type="text" name="Prod_foto" id="Prod_foto"><br><br>
		<input type="text" id='Categoria' name='Categoria'><br><br>
		<input type="text" id='Descripcion' name='Descripcion'><br><br>
		<input type="text" id='Proveedor' name='Proveedor'><br><br>
		<input type="text" id='Ex_Inicial' name='Ex_Inicial'><br><br>
		<input type="text" id='Ex_Actual' name='Ex_Actual'><br><br>
		<input type="text" id='Precio_C	' name='Precio_C'><br><br>
		<input type="text" id='Precio_V' name='Precio_V'><br><br>
		<input type="submit">
	</form>
</section>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/add.css')}}">
@endsection
