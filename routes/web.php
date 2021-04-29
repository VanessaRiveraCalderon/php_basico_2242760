<?php

use Illuminate\Support\Facades\Route;

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

Route::get('variables' , function(){
    $mensaje = 10;
    var_dump($mensaje);
    echo "<hr>";
    $mensaje = "Vanessa Rivera";
    var_dump($mensaje);
} );

Route::get('arreglos' , function(){
    //Arreglo: estructura de datos
    $estudiantes = ["AN" => "Ana",
                    "MA" => "Maria",
                    "JO" => "Jorge"];
    echo "<pre>";
    print_r ($estudiantes);
    echo "</pre>";
} );
