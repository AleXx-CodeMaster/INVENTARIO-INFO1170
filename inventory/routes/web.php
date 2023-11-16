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
// routes/web.php



//LOGIN-ZONE

Route::get('/inicio', function () {
    return view('LOGIN-ZONE.inicio-sesion');
})->name('inicio'); // 'Ruta que me dijire al Inicio de sesion principal'


Route::get('/olvidocontraseña', function () {
    return view('LOGIN-ZONE.olvido-contraseña');
});


Route::get('/registro', function () {
    return view('LOGIN-ZONE.register');
});

//HOME-ZONE-ADMINISTRADOR

Route::get('/administrador-menu', function () {
    return view('HOME-ZONE-ADMINISTRADOR.menu-admin');
});


//HOME-ZONE-EMPLEADO
Route::get('/empleado-menu', function () {
    return view('HOME-ZONE-EMPLEADOS.menu-empleados');
});

//PAGINAS-NEXUS

Route::get('/ayuda', function () {
    return view('PAGINAS-NEXUS.ayuda');
});

Route::get('/categoria', function () {
    return view('PAGINAS-NEXUS.categoria');
});

Route::get('/contactanos', function () {
    return view('PAGINAS-NEXUS.contactanos');
});

Route::get('/historial', function () {
    return view('PAGINAS-NEXUS.historial');
});

Route::get('/mas-sobre-nexus', function () {
    return view('PAGINAS-NEXUS.mas-sobre-nosotros');
});

Route::get('/productos', function () {
    return view('PAGINAS-NEXUS.productos');
});

Route::get('/proveedores', function () {
    return view('PAGINAS-NEXUS.proveedores');
});

Route::get('/terminos', function () {
    return view('PAGINAS-NEXUS.terminos');
});

Route::get('/trabajadores', function () {
    return view('PAGINAS-NEXUS.trabajadores');
});


