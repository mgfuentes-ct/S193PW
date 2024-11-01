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
        //return redirect('/');
        $validacion = $peticion->validate([
            'txtisbn' => 'required|digits:13|numeric',
            'txttitulo' => 'required|string|max:150',
            'txtautor' => 'required',
            'txtpaginas' => 'required|integer|min:1',
            'txtaño' => 'required|integer|digits:4|min:1000|max:' . now()->year,
            'txteditorial' => 'required|string|max:100',
            'txtemail' => 'required|email'
        ]);

        $libro = $peticion->input('txttitulo');
        session()->flash('EXITO','Se guardo el libro: '.$libro);
        return to_route('rutaregistro');

        
    }
}
