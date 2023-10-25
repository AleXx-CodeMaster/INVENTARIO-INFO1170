@extends('plantilla')

@section('content')
    <h1>Agrega tu empresa</h1>

    <section class='add'>
	    <form action="{{route('empresas.store')}}" method="POST">
		    @csrf
            <label>
                Id
                <br>
		        <input type="number" id="id" name="ID_E">
            </label>
            <br>
            <label>
                Nombre
                <br>
		        <input type="text" id='Nombre' name='Nombre'>
            </label>
            <br>
            <label>
                Fecha de creacion
                <br>
		        <input type="date" id='Fecha_Creacion' name='Fecha_Creacion'>
            </label>
            <br>
            <label>
                Tipo de Negocio
                <br>
		        <input type="text" id='Tipo_Negocio' name='Tipo_Negocio'>
            </label>
            <br>
            <label>
                Cantidad de empleados
                <br>
		        <input type="number" id="Cant_Empleados" name="Cant_Empleados">
            </label>
            <br>
            <label>
                Contraseña
                <br>
		        <input type="text" id='Contraseña' name='Contraseña'>
            </label>
            <br>
            <label>
                Jefe
                <br>
		        <input type="text" id="Jefe" name="Jefe">
            </label>
            <br>
            <label>
                Correo
                <br>
                <input type="text" id="Correo" name="Correo">
            </label>
            <br>
            <label>
                Direccion
                <br>
                <input type="text" id="Direccion" name="Direccion">
            </label>
            <br>
            <label>
                Telefono
                <br>
                <input type="numbers" id="Telefono" name="Telefono">
            </label>
		    <button type="submit">Mandar datos</button>

        </form>
    </section>
@endsection