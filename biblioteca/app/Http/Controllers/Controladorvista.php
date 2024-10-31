<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controladorvista extends Controller
{
    public function home()
    {
        return view('principal');
    }

    public function formulario()
    {
        return view('registro_libro');
    }

    public function procesarLibro(Request $peticion)
    {
        //return 'Info recibida';
        return $peticion->all();
    }
}
