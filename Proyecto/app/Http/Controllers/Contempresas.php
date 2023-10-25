<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empresas;

class contempresas extends Controller
{
    public function index(){
        $empresas = empresas::paginate();

        return view('GestionProductos.proveedores', compact('empresas'));
    }
    public function empcreador(){
        return view('betaconex.Addempre');

    }
    public function guardarempresas(Request $request){
        $empresas = new empresas();

        $empresas->ID_E = $request->ID_E;
        $empresas->Nombre = $request->Nombre;
        $empresas->Fecha_Creacion = $request->Fecha_Creacion;
        $empresas->Tipo_Negocio = $request->Tipo_Creacion;
        $empresas->Cant_Empleados = $request->Cant_Empleados;
        $empresas->Contrasena = $request->Contrasena;
        $empresas->Jefe = $request->Jefe;
        $empresas->Correo = $request->Correo;
        $empresas->Direccion = $request->Direccion;
        $empresas->Telefono = $request->Telefono;

        $empresas->save();

        return redirect()->route('showprod.show',$empresas->ID_E);

    }
    public function show($empresas){ 

        return view('betaconex.showempresa', compact('empresas'));
    }
    
}

