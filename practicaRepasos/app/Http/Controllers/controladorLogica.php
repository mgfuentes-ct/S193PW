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
        //return $datos->all();

        $r = 0;
        $resultado='';
        $cantidad = $datos->input('txtunidadMB');


        if ($datos->has('btnMBGB')){
            //mgas a gigas 
            $r = $cantidad/1000;
            $resultado = 'El resulatdo a GB es: '.$r;

        } elseif ($datos->has('btnMBTB')){
            //megas a teras
            $r = $cantidad/(1024*1024);
            $resultado = 'El resulatdo a TB es: '.$r;
        }

        return $resultado;

    }
}
//ISSET