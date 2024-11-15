<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;
use App\Http\Controllers\clienteControlador;

/* Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio'); */

/* Route::get('/form', function () {
    return view('formulario');   */        /* segunda ruta para el formulario*/
/* })->name('rutaForm'); */

/* Route::get('/consultar', function () {
    return view('clientes');   */    /* tercera ruta para el de clientes*/
/* })->name('rutaClientes'); */ /* apodo que va a tener la ruta */


/* RUTAS DE TIPO VIEW (YA NO BNOS SERAN UTILES) */
/*Route::view('/','inicio')->name('rutaInicio');
Route::view('/form','formulario')->name('rutaForm');
Route::view('/consultar','clientes')->name('rutaClientes'); */

Route::view('/component','componentes')->name('rutacomponent');

/* RUTAS PARA CONTROLADOR VISTAS */

Route::get('/', [ControladorVista::class, 'home'])->name('rutaInicio');


Route::get('/consultar', [ControladorVista::class, 'consulta'])->name('rutaClientes');

Route::post('/enviarCliente', [ControladorVista::class, 'procesarCliente'])->name('rutaEnviar');  //la parte de name no es importante cuando es post


/* RUTAS PARA CONTROLADOR CLIENTE */
Route::get('/cliente/create', [clienteControlador::class, 'create'])->name('rutaForm');

Route::post('/cliente',[clienteControlador::class, 'store'])->name('rutaEnviar');

Route::get('/cliente', [clienteControlador::class, 'index'])->name('rutaClientes');
