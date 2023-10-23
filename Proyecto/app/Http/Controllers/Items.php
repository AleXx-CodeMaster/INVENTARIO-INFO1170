<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Items extends Controller
{
    public function listarItems(){

        $productos = DB::table('items')->get();
        return view('GestionProductos.productos',compact('productos'));
    }
    public function agregarItems(){

        return view ('GestionProductos.AddProd');
    }

    public function guardarItems(Request $request){

        DB::table('items')->insert([
            'ID_I' => $request->id,
            'Nombre' => $request->Nombre,
            'Cantidad' => $request ->Cantidad,
            'Tipo_Producto' => $request ->Tipo_Producto,
            'Prod_foto' => $request ->Prod_foto,
            'Categoria'=> $request ->Categoria,

        ]);
        return redirect()->route('productos.listar');
    }
}
