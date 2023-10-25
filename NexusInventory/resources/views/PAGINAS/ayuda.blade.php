@extends('MenuPrincipal')

@section('menu')
<title>Ayuda</title>
<div class="CuerpoPagina">
    <header class="Cont-A1">
        <h1>Ayuda</h1>
        <hr>
    </header>
    <main class = 'Cont-A2'>
        <section id ="Box1-a">
            <h3>Relacionado al Uso de La pagina</h3>
            <div class = 'Cont3'>
                <ul >
                    <li><details><summary>¿Duda1:Como agregar un registro en productos?</summary>
                        <p>Texto expplicando la duda 1
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea inventore omnis aut totam, illo ipsa molestias alias laboriosam officiis est hic? Fugit voluptate officiis harum ea dignissimos sequi nam veniam!
                        </p></details></li>
                    <li><details><summary>¿Duda2:Donde se encuntra la opción para cambiar el tamaño de letra de mis tablas?</summary>
                        <p>Texto expplicando la duda 2</p></details></li>
                    <li><details><summary>¿Duda3?</summary>
                        <p>Texto expplicando la duda 3</p></details></li>
                    <li><details><summary>¿Duda4?</summary>
                        <p>Texto expplicando la duda 4</p></details></li>
                    <li><details><summary>¿Duda5?</summary>
                        <p>Texto expplicando la duda 5</p></details></li>
                    <li><details><summary>¿Duda6?</summary>
                        <p>Texto expplicando la duda 6</p></details></li>
                    <li><details><summary>¿Duda7?</summary>
                        <p>Texto expplicando la duda 7</p></details></li>
                    <li><details><summary>¿Duda8?</summary>
                        <p>Texto expplicando la duda 8</p></details></li>
                    <li><details><summary>¿Duda9?</summary>
                        <p>Texto expplicando la duda 9</p></details></li>
                    <li><details><summary>¿Duda10:?</summary>
                        <p>Texto expplicando la duda 10</p></details></li>
                </ul>
            </div>
        </section>
        <section id ="Box2-a">
            <h3>Problemas con la pagina</h3>
            <div class = 'Cont2'>
                <ul >
                    <li><details><summary>¿Duda1:Tengo problema al ingresar un dato?</summary>
                        <p>Texto expplicando la duda 1. |Reportar|</p></details></li>
                    <li><details><summary>¿Duda2?</summary>
                        <p>Texto expplicando la duda 2</p></details></li>
                    <li><details><summary>¿Duda3?</summary>
                        <p>Texto expplicando la duda 3</p></details></li>
                    <li><details><summary>¿Duda4?</summary>
                        <p>Texto expplicando la duda 4</p></details></li>
                    <li><details><summary>¿Duda5?</summary>
                        <p>Texto expplicando la duda 5</p></details></li>
                    <li><details><summary>¿Duda6?</summary>
                        <p>Texto expplicando la duda 6</p></details></li>
                    <li><details><summary>¿Duda7?</summary>
                        <p>Texto expplicando la duda 7</p></details></li>
                    <li><details><summary>¿Duda8?</summary>
                        <p>Texto expplicando la duda 8</p></details></li>
                    <li><details><summary>¿Duda9?</summary>
                        <p>Texto expplicando la duda 9</p></details></li>
                    <li><details><summary>¿Duda10:?</summary>
                        <p>Texto expplicando la duda 10</p></details></li>
                </ul>
            </div>
        </section>
    </main>
    <footer class="Cont-A3">@2023-09-23 Sistema de Gestiones</footer>
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/ayuda.css')}}">
@endsection
