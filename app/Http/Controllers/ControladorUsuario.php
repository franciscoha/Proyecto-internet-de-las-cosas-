<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorUsuario extends Controller
{
    public function index(){
        return "Usuario: Francisco Hernandez Alvarez";
    }
    public function muestraDetalle($id){
        return 'mostrando detalles de usuario: '.$id;
    }
    public function crear(){
        return 'Bienvenido usuario nuevo';
    }
}
