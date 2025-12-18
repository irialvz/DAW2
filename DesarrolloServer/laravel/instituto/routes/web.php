<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("saludo",fn()=>"Hola"); //DEVUELVE ALGO (hola, en este caso)
//Route::get("saludo",function(){
//    return "Hola Mundo";
//});

//Route::get("ver",fn()=>view("saludo")); //DEVUELVE UNA VISTA
Route::view("ver","saludo"); //segunda opcion,DEVUELVE UNA VISTA
Route::get("main",[MainController::class,"index"]);

Route::fallback(function(){
    $nombre = request()->url();
   return "<h1>Error: $nombre Nanai del peluquin</h1>";
});
