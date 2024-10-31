<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Controladorvista;

/*Route::view('/','principal')->name('rutainicio');
Route::view('/form','registro_libro')->name('rutaregistro');*/

Route::view('/component','componentes')->name('rutacomponent');

Route::get('/',[Controladorvista::class, 'home'])->name('rutainicio');
Route::get('/form',[Controladorvista::class, 'formulario'])->name('rutaregistro');

Route::post('/enviarLibro',[Controladorvista::class,'procesarLibro'])->name('rutaEnviar');