<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVista;

Route::view('/','inicio')->name('rutaInicio');
Route::view('/repaso1','repaso1')->name('rutaConvertidor');