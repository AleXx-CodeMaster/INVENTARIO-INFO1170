<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleados;

class EmpleadosController extends Controller {

    public function store(Request $request) {

         $empleados = new Empleados();
         $empleados->ID_N = $request->yourut;
         $empleados->Oficio = $request->logname;
         $empleados->Contrasena = $request->logpass2;
         $empleados->Fecha_Nacimiento = $request->fecha_nacimiento;
         $empleados->Salario = $request ->Salario;
         $empleados->Correo = $request->logemail2;
         $empleados->ID_E = $request->namework;
         $empleados->save();

    }

}
