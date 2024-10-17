<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorLogica extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function repaso1(){
        return view('repaso1');
    }

    public function datos(Request $datos){
        //return 'prueba';
        return $datos->all();
    }
}
