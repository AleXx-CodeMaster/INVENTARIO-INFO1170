<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;

class Contclientes extends Controller
{
    public function index(){

        $clientes = clientes::paginate();

        return view('clientes', compact('clientes'));
    }
    public function clientescreate(){
        return view('betaconex.Addcliente');
    }
    public function guardarclientes(Request $request){
        $clientes = new clientes();

        $clientes->ID_C = $request->ID_C;
        $clientes->Nombre = $request->Nombre;
        $clientes->Correo = $request->Correo;
        $clientes->Telefono = $request->Telefono;
        $clientes->Direccion = $request->Direccion;

        $clientes->save();

        return redirect()->route('showprod.show',$clientes->ID_C);
    }
    public function show($clientes){ 

        return view('betaconex.showprod', compact('clientes'));
    }
}
