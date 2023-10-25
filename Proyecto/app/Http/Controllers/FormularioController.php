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

    public function procesarFormulario(Request $request)
    {
        $id = $request->input('ID_I');
        $row = DB::table('items')->where('ID_I', $id)->first();

        if ($row) {
            return view('resultado', ['row' => $row]);
        } else {
            return "La ID no existe.";
        }
        
    }
}
