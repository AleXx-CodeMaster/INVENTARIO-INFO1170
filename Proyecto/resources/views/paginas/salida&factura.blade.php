@extends('menu')

@section('menu')
<div class="CuerpoPagina">
    <header class="tittle">
        <h1>Salida / Factura    </h1>
        <hr>
    </header> <br>
    <nav class="busqueda">
        <input type="submit" name="" id="" value="Buscar por numero de factura">
        <input type="submit" name="" id="" value="Buscar Cliente">
    </nav>
    <section class="proovedores">
        <header class="prov-dat">
        </header>
        <div class="prov2">
            <table class="table-prov2">
                <tr>
                    <th>Factura</th>
                    <th>Fecha</th>
                    <th>Monto del Cliente</th>
                    <th>Total Pagado</th>
                    <th>Debido</th>
                    <th>Vendido por</th>
                    <th>Pagado por</th>
                    <th>pagos</th>
                    <th>abonar</th>
                    <th>imprimir</th>
                    <th>editar</th>
                    <th>eliminar</th>
                </tr>
            </table>
        </div>
        <div class="prov">
            <table class="table-prov">
                <tr>
                    <th>Joaquin</th>
                    <th>canteroxx92@gmail.com</th>
                    <th>+56963028619</th>
                    <th>Balmaceda194</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                    <th class="li3"><li></li></th>
                    <th class="li4"><li></li></th>
                    <th class="li5"><li></li></th>
                </tr>
                <tr>
                    <th>Joaquin</th>
                    <th>canteroxx92@gmail.com</th>
                    <th>+56928188128</th>
                    <th>Pastor Oscar Alarcon 181</th>
                    <th class="li1"><li></li></th>
                    <th class="li2"><li></li></th>
                </tr>
            </table>
        </div>
    </section>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/salida.css')}}">
@endsection
