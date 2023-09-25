@extends('menu')

@section('menu')
<div class="CuerpoPagina">
    <header class="C-MP1">
        <div>
            <img src="Logo.jpg"width='200px'>
            <h1>Nombre de la Empresa</h1>
        </div>
    </header>
    <main class="C-MP2">
        <section id='Contedor-1'>
            <div id ='DivCambio1'>
                <!--PARRAFOS DESCRIPTIVO ,del mensaje del boton
                    Usando Javascript se colocaria los correspondientes
                    del boton que se precione , se ejecutaria el tipo de info que se cola
                    en este apartado, mienstras estaria vacia

                    La etiqueta canavas , para hacer lo del grafico-->
                <p>lugar donde sale la el texto y grafico</p>
                <canvas id="miGrafico" height="0rem"></canvas>
            </div>
        </section>
        <section id="Contedor-2">
            <button class="BotonMenu" id="Bot1">Estadistica</button>
            <button class="BotonMenu" id="Bot2">Productos mas vendidos</button>
            <button class="BotonMenu" id="Bot3">Productos menos vendidos</button>
            <button class="BotonMenu" id="Bot4">Resumen de Registros</button>
        </section>
        <section id="Contedor-3">
            <div id ='DivCambio1'> </div>
        </section>
        <section id="Contedor-4" >
                <div class="C parte-1"><details><summary>Clientes</summary>
                <p>.</p></details></div>
                <div class="C parte-2"><details><summary>Existencia total</summary></details></div>
                <div class="C parte-3"><details><summary>Importe Pagado</summary></details></div>
                <div class="C parte-4"><details><summary>Provedores</summary></details></div>
                <div class="C parte-5"><details><summary>Existencia vendida</summary></details></div>
                <div class="C parte-6"><details><summary>Importe restante</summary></details></div>
                <div class="C parte-7"><details><summary>Productos</summary></details></div>
                <div class="C parte-8"><details><summary>Existencia Actual</summary></details></div>
                <div class="C parte-9"><details><summary>Beneficio Bruto</summary></details></div>
                <div class="C parte-10"><details><summary>Facturas</summary></details></div>
                <div class="C parte-11"><details><summary>Importe vendido</summary></details></div>
                <div class="C parte-12"><details><summary>Beneficio Neto</summary></details></div>
        </section>
    </main>
    <footer class="C-MP3">@2023-09-21-Sistema de Gestiones</footer>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
