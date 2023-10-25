<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empresas;

class EmpresasController extends Controller {
    public function store(Request $request) {

        $empresas = new Empresas();
        $empresas->ID_E = $request->RutEmpresa;
        $empresas->Nombre = $request->Tuempresa;
        $empresas->Fecha_Creacion;
        $empresas->Tipo_Negocio = $request->CategoriaBodega;
        $empresas->Cant_Empleados = $request->CantidadEmpleados;
        $empresas->Contrasena = $request->logpass;
        $empresas->Jefe = $request->Jefe;
        $empresas->save();



    }
}
