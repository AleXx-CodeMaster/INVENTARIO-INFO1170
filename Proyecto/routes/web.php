<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/login', function () {
    return view('paginas.login');
});
Route::get('/contraseña', function () {
    return view('paginas.contraseña');
});
Route::get('/registro', function () {
    return view('paginas.registro');
});
Route::get('/parte', function () {
    return view('paginas.parte');
});
Route::get('/bandeja', function () {
    return view('paginas.bandeja');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/proveedores', function () {
    return view('paginas.proveedores');
});
Route::get('/calendario', function () {
    return view('paginas.calendario');
});
Route::get('/ajustes', function () {
    return view('paginas.ajustes');
});
Route::get('/ayuda', function () {
    return view('paginas.ayuda');
});
Route::get('/categorias', function () {
    return view('paginas.categorias');
});
Route::get('/clientes', function () {
    return view('paginas.clientes');
});
Route::get('/entrada', function () {
    return view('paginas.entrada');
});
Route::get('/nosotros', function () {
    return view('paginas.nosotros');
});
Route::get('/productos', function () {
    return view('paginas.productos');
});
Route::get('/salida&factura', function () {
    return view('paginas.salida&factura');
});
Route::get('/terminos', function () {
    return view('paginas.terminos');
});
