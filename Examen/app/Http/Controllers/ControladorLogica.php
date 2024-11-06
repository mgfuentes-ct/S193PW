<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorLogica extends Controller
{
    public function registro(){
        return view('registro');
    }


    public function procesarprenda(Request $peticion){
        //return $peticion->all();

        $validacion = $peticion->validate([
            'txtprenda' => 'required|min:3|max:50',
            'txttalla' => 'required|min:1|max:5',
            'txtcolor' => 'required|integer|min:3|max:20',
        ]);


        $prenda = $peticion->input('txtprenda');
        session()->flash('exito','Se guardo la prenda: '.$prenda);
        return to_route('rutaformulario');
    }


}



