<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Items extends Controller
{
    public function listarItems(){

        $usuarios = DB::table('empleados')->get();
        return view('paginas.productos',compact('productos'));
    }
    public function agregarItems(){

        return view ('paginas.AddProd');
    }

    public function guardarItems(Request $request){

        DB::table('empleados')->insert([
            'ID_' => $request->id,
            'Nombre' => $request->Nombre,
            'Cantidad' => $request ->Cantidad,
            'Tipo_Producto' => $request ->Tipo_Producto,
            'img' => $request ->img,

        ]);
        return redirect()->route('productos.listar');
    }
}
