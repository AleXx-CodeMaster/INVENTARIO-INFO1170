@extends('menu')

@section('menu')
<div class="cuerpopagina">
    @if(isset($row))
        <p>ID_I: {{ $row->ID_I }}</p>
        <p>Nombre: {{ $row->Nombre }}</p>
        <p>Ex_Inicial: {{ $row->Ex_Inicial }}</p>
        <p>Ex_Actual:{{ $row->Ex_Actual }}</p>
        <p>Categoria:{{ $row->Categoria }}</p>
        <p>Tipo_Producto:{{ $row->Tipo_producto }}</p>
        <p>Proveedor:{{ $row->Proveedor }}</p>
        <p>Precio_V:{{ $row->Precio_V }}</p>
    @else
        <p>La ID no existe.</p>
    @endif
</div>
@endsection
