<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorLogica;

//Route::view('/','inicio')->name('rutaInicio');
//Route::view('/repaso1','repaso1')->name('rutaConvertidor');

Route::view('/component','componentes')->name('rutacomponent');
Route::get('/',[controladorLogica::class, 'inicio'])->name('rutaInicio');
Route::get('/repaso1',[controladorLogica::class, 'repaso1'])->name('rutaConvertidor');



//ruta para la info
Route::post('enviarDatosMB',[ControladorLogica::class, 'datos'])->name('enviarDatosMB');