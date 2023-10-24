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
            'Tipo_Producto' => $request ->Tipo_Producto,
            'Prod_foto' => $request ->Prod_foto,
            'Categoria'=> $request ->Categoria,
            'Descripcion'=> $request ->Descripcion,
            'Proveedor'=> $request ->Proveedor,
            'Ex_Inicial'=> $request ->Ex_Inicial,
            'Ex_Actual'=> $request ->Ex_Actual,
            'Precio_C'=> $request ->Precio_C,
            'Precio_V'=> $request ->Precio_V

        ]);
        return redirect()->route('productos.listar');
    }
}
