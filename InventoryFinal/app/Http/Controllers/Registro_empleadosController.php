<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro_empleados;

class Registro_empleadosController extends Controller
{
    public function store(Request $request) {

        $registro_empleados = new Registro_empleados();
        $registro_empleados->Correo = $request->input('logemail');
        $registro_empleados->Contraseña_Usuario = $request->input('contraseña');
        $registro_empleados->save();





    }
}
