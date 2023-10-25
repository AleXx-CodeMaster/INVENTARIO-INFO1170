<?php

namespace App\Http\Controllers;

use App\Models\empleados;
use App\Models\empresa;
use Illuminate\Http\Request;

class contempleados extends Controller
{
    public function index(){
        $empleados = empresa::paginate();

        return view('betaconex.Interprises', compact("empresa"));
    }
    public function empcreador(){
        return view('betaconex.AddEmp');

    }
    public function guardarempresas(Request $request){
        $empleados = new empleados();

        $empleados->ID_E = $request->ID_E;
        $empleados->Nombre = $request->Nombre;
        $empleados->Fecha_Creacion = $request->Fecha_Creacion;
        $empleados->Tipo_Negocio = $request->Tipo_Creacion;
        $empleados->Cant_Empleados = $request->Cant_Empleados;
        $empleados->Contraseña = $request->Contraseña;
        $empleados->Jefe = $request->Jefe;
        $empleados->Correo = $request->Correo;
    }
}
