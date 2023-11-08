<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    public function index(){

        $prueba = DB::table("CLIENTE")->get();
        return $prueba;
    }
}
