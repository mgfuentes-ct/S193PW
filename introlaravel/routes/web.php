<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio'); */

/* Route::get('/form', function () {
    return view('formulario');   */        /* segunda ruta para el formulario*/
/* })->name('rutaForm'); */

/* Route::get('/consultar', function () {
    return view('clientes');   */    /* tercera ruta para el de clientes*/
/* })->name('rutaClientes'); */ /* apodo que va a tener la ruta */




/* RUTAS DE TIPO VIEW  */
Route::view('/','inicio')->name('rutaInicio');
Route::view('/form','formulario')->name('rutaForm');
Route::view('/consultar','clientes')->name('rutaClientes');

    Route::view('/component','componentes')->name('rutacomponent');