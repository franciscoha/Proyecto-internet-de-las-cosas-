<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorEstadisticas extends Controller
{
    public function muestraVista(){
        return view("vistaEstadisticas");
    }
}
