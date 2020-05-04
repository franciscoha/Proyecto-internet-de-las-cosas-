<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorBienvenidaUsuario extends Controller
{
    public function index($name,$nickname=null){
        if($nickname){
            return "hola {$name}, tu apodo es: {$nickname}";
        }
        else{
            return "hola {$name}, no tienes apodo";
        }
    }
    public function home(){
        return "Curso de programacion para internet 2020_A";
    }
}
