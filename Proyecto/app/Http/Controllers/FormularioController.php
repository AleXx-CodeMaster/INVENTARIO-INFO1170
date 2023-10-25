<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    public function index()
    {
        return view('escaner');
    }
    public function creardatos(){
        return view('resulotado');
    }

    public function procesarFormulario(Request $request)
    {
        $id = $request->input('id');
        $row = DB::table('mi_tabla')->where('id', $id)->first();

        if ($row) {
            return view('resultado', ['row' => $row]);
        } else {
            return "La ID no existe.";
        }
    }
}
