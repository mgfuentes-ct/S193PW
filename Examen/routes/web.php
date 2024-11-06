<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLogica;

//Route::get('/', function () {
  //  return view('registro');
//});


Route::view('/component','componentes')->name('rutacomponent');

Route::get('/',[ControladorLogica::class,'formulario'])->name('rutaformulario');