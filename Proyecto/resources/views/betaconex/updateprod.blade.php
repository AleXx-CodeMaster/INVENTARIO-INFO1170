@extends('plantilla')

@section('content')
    <h1>Actualiza un producto</h1>

    <section class='add'>
	    <form action="{{route('Products.guardarproducto')}}" method="POST">
		    @csrf
            <label>
                Id
                <br>
		        <input type="number" id="id" name="ID_I">
            </label>
            <br>
            <label>
                Nombre
                <br>
		        <input type="text" id='Nombre' name='Nombre'>
            </label>
            <br>
            <label>
                Existencia inicial
                <br>
		        <input type="number" id='Ex_Inicial' name='Ex_Inicial'>
            </label>
            <br>
            <label>
                Existencia Actual
                <br>
		        <input type="number" id='Ex_Actual' name='Ex_Actual'>
            </label>
            <br>
            <label>
                Tipo de producto
                <br>
		        <input type="text" id="Tipo_Producto" name="Tipo_Producto">
            </label>
            <br>
            <label>
                Categoria
                <br>
		        <input type="text" id='Categoria' name='Categoria'>
            </label>
            <br>
            <label>
                img
                <br>
		        <input type="file" name="img" id="img">
            </label>
            <br>
            <label>
                Fecha_entry
                <br>
		        <input type="date" id="Fecha_Entry" name="Fecha_entry">
            </label>
            <br>
            <label>
                Precio de compra
                <br>
                <input type="numbers" id="Precio_C" name="Precio_C">
            </label>
            <br>
            <label>
                Precio de venta
                <br>
                <input type="numbers" id="Precio_V" name="Precio_V">
            </label>
		    <button type="submit">Mandar datos</button>

        </form>
    </section>
@endsection