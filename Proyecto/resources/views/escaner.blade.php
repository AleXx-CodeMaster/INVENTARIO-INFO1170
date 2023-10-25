@extends('menu')

@section('menu')
<div class="cuerpopagina">
    <form action="{{ route('procesar.formulario') }}" method="POST">
        @csrf
        <label for="id">ID:</label>
        <input type="text" name="id" id="id" required>
        <button type="submit">Enviar</button>
    </form>
</div>
@endsection
