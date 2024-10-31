<?php

use Illuminate\Support\Facades\Route;

Route::view('/','principal')->name('rutainicio');
Route::view('/form','registro_libro')->name('rutaregistro');
