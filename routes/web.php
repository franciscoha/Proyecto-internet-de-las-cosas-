<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Home','ControladorBienvenidaUsuario@home');                
Route::get('/usuario','ControladorUsuario@index');//nombre de controlador@metodo
/**Route::get('/usuario',function(){
    return "Usuario: Francisco Hernandez Alvarez";
});*/
Route::get('/usuario/nuevo','ControladorUsuario@crear');
Route::get('/usuario/{id}','ControladorUsuario@muestraDetalle')->where('id','[0-9]+');
Route::get('/saludos/{name}/{nickname?}','ControladorBienvenidaUsuario@index');
