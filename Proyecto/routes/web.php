<?php

use App\Http\Controllers\Contitems;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Items;
use App\Http\Controllers\Contempresas;
use App\Http\Controllers\Contclientes;
use App\Http\Controllers\FormularioController;

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
    return view('Login.login');
});
Route::get('/contraseña', function () {
    return view('Login.contraseña');
});
Route::get('/registro', function () {
    return view('Login.registro');
});
Route::get('/parte', function () {
    return view('Login.parte');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/Proveedores', [Contempresas::class,'index'])->name('empresas.index');

Route::get('/Addempre',[Contempresas::class,'empcreador'])->name('empresas.create');

Route::post('/Proveedores',[Contempresas::class,'guardarempresas'])->name('empresas.store');

Route::get('/betaconex/{empresas}',[Contitems::class,'show'])->name('empresas.show');

Route::get('/calendario', function () {
    return view('Informacion.calendario');
});
Route::get('/ajustes', function () {
    return view('ajustes');
});
Route::get('/ayuda', function () {
    return view('Informacion.ayuda');
});
Route::get('/categorias', function () {
    return view('GestionProductos.categorias');
});
Route::get('/clientes', [Contclientes::class,'index'])->name('clientes.index');

Route::get('/Addclientes', [Contclientes::class, 'clientescreate'])->name('clientes.create');

Route::post('/clientes', [Contclientes::class, 'guardarclientes'])->name('clientes.store');

Route::get('/betaconex/{clientes}', [Contclientes::class, 'show'])->name('clientes.show');

Route::get('/entrada', function () {
    return view('GestionExistencias.entrada');
});
Route::get('/nosotros', function () {
    return view('Informacion.nosotros');
});
Route::get('/Products', [Contitems::class,'index'])->name('productos.index');

Route::get('/Addprod', [Contitems::class,'prodcreate'])->name('productos.prodcreate');

Route::post('/Products', [Contitems::class,'guardarproducto'])->name('Products.guardarproducto');

Route::get('/betaconex/{items}',[Contitems::class,'show'])->name('showprod.show');

Route::get('/betaconex/{item}/edit',[Contitems::class,'editprod'])->name('productos.edit');

Route::get('/salida&factura', function () {
    return view('GestionExistencias.salida&factura');
});
Route::get('/terminos', function () {
    return view('terminos');
});
Route::get('/escaner', [FormularioController::class,'index'])->name('formulario');

Route::post('/escaner',[FormularioController::class,'procesarFormulario'])->name('procesar.formulario');