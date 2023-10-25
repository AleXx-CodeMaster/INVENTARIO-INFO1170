@extends('plantilla')

@section('content')
    <h1>Crea un producto</h1>

    <section class='add'>
	    <form action="{{route('clientes.store')}}" method="POST">
		    @csrf
            <label>
                Id
                <br>
		        <input type="number" id="id" name="ID_C">
            </label>
            <br>
            <label>
                Nombre
                <br>
		        <input type="text" id='Nombre' name='Nombre'>
            </label>
            <br>
            <label>
                Correo
                <br>
		        <input type="text" id='Correo' name='Correo'>
            </label>
            <br>
            <label>
                Telefono
                <br>
		        <input type="number" id='Telefono' name='Telefono'>
            </label>
            <br>
            <label>
                Direccion
                <br>
		        <input type="text" id="Direccion" name="Direccion">
            </label>
            <br>
		    <button type="submit">Mandar datos</button>

        </form>
    </section>
@endsection