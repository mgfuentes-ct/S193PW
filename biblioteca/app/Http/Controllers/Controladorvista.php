<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibro;

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

    public function procesarLibro(ValidadorLibro $peticion)
    {
        //return 'Info recibida';
        //return redirect('/');
        

        $libro = $peticion->input('txttitulo');
        session()->flash('EXITO','Se guardo el libro: '.$libro);
        return to_route('rutaregistro');

        
    }
}
