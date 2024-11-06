<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLogica extends Controller
{
    public function formulario(){
        return view('registro');
    }
}
