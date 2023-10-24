<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Log_entries;

    /*
    index = para mostrar todos los elementos
    store = para guardar un elemento
    update = para actualizar un elemento
    destroy = para eliminar en un elemento
    edit = para mostrar el formulario de edicion
    */

  class Log_entriesController extends Controller {

    public function store(Request $request) {

        $log_entries = new Log_entries();
        $log_entries->ID_N = $request->logpass;  // Asigna un valor a la columna ID_N
        $log_entries->correo_electronico = $request->logemail;
        $log_entries->save();




    }

}
