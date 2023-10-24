<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\log_entriesController;




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

//ZONA DE CONEXION DE PAGINAS


//ZONA DE INICIO DE SESION

Route::get('/login', function () {
    return view('LoginZone.InicioDeSesionYRegistro');
})->name('inicio'); // 'Ruta que me dijire al Inicio de sesion principal'

Route::post('/login' , [log_entriesController::class, 'store'])->name('login.store');

Route::get('/cambioContraseña', function () {
    return view('LoginZone.cambioContraseña');
});

Route::get('/RegistraTuEmpresa', function () {
    return view('LoginZone.RegistraTuEmpresa');
});

Route::get('/InicioDeEmpresa', function () {
    return view('LoginZone.InicioDeEmpresa');
});

Route::get('/ayuda', function () {
    return view('PAGINAS.ayuda');
});

Route::get('/calendario', function () {
    return view('PAGINAS.calendario');
});

Route::get('/clientes', function () {
    return view('PAGINAS.clientes');
});

Route::get('/MasSobreNosotros', function () {
    return view('PAGINAS.MasSobreNosotros');
});

Route::get('/Terminos', function () {
    return view('PAGINAS.Terminos');
});


//GestionDeExistencias

Route::get('/Entrada', function () {
    return view('GestionDeExistencias.Entrada');
});

Route::get('/Salida&Factura', function () {
    return view('GestionDeExistencias.Salida&Factura');
});

//GestionDeProductos

Route::get('/categorias', function () {
    return view('GestionDeProductos.categorias');
});

Route::get('/Productos', function () {
    return view('GestionDeProductos.Productos');
});

Route::get('/proveedores', function () {
    return view('GestionDeProductos.proveedores');
});


//Configuracion Zone

Route::get('/ajustesadmin', function () {
    return view('ConfiguracionZone.ajustesADMIN');
});

Route::get('/ajustesempl', function () {
    return view('ConfiguracionZone.ajustesEMPL');
});

//MenuPrincipal

Route::get('/menuprincipal', function () {
    return view('MenuPrincipal');
});

