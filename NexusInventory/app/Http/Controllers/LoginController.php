<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleados;
use App\Models\Log_entries;

class LoginController extends Controller
{
    public function storeLog(Request $request) {

        $log_entries = new Log_entries();
        $log_entries->ID_N = $request->logpass;  // Asigna un valor a la columna ID_N
        $log_entries->correo_electronico = $request->logemail;
        $log_entries->save();

    }

    public function storeEmpleados(Request $request) {
        $empleados = new Empleados();
        $empleados->ID_N = $request->yourut;
        $empleados->Oficio = $request->logname;
        $empleados->Contrasena = $request->logpass2;
        $empleados->Fecha_Nacimiento = $request->fecha_nacimiento;
        $empleados->Salario = $request;
        $empleados->Correo = $request->logemail2;
        $empleados->ID_E = $request->namework;
        $empleados->save();

    }
}
