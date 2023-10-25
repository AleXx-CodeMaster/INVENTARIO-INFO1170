<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\items;

class Contitems extends Controller
{
    public function index(){

        $items = items::paginate();

        return view('betaconex.Products', compact('items'));

    }
    public function prodcreate(){
        return view('betaconex.Addprod');
    }
    public function guardarproducto(Request $request){
        ini_set('max_execution_time', 180);
        $items = new items();

        $items->ID_I = $request->ID_I;
        $items->Nombre = $request->Nombre;
        $items->Ex_Inicial = $request->Ex_Inicial;
        $items->Ex_Actual = $request->Ex_Actual;
        $items->Categoria = $request->Categoria;
        $items->Prod_foto = $request->img;
        $items->Tipo_Producto = $request->Tipo_producto;
        $items->Proveedor = $request->Proveedor;
        $items->Precio_C = $request->Precio_C;
        $items->Precio_V = $request->Precio_V;
        $items->Fecha_entry = $request->Fecha_entry;

        $items->save();

        return redirect()->route('showprod.show',$items->ID_I);

    }
    public function show($items){ 

        return view('betaconex.showprod', compact('items'));
    }
    
 }

