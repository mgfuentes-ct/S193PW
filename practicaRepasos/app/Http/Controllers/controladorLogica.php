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




    public function datos1(Request $datos){
        //return 'prueba';
        //return $datos->all();

        $r = 0;
        $resultado='';
        $cantidad = $datos->input('txtunidadGB');


        if ($datos->has('btnGBMB')){
            //gigas A MEGAS
            $r = $cantidad * 1024;
            $resultado = 'El resulatdo a MB es: '.$r;

        } elseif ($datos->has('btnGBTB')){
            //GIGAS A TERAS
            $r = $cantidad / 1024;
            $resultado = 'El resulatdo a TB es: '.$r;
        }

        return $resultado;
    }




    public function datos2(Request $datos){
        //return 'prueba';
        //return $datos->all();

        $r = 0;
        $resultado='';
        $cantidad = $datos->input('txtunidadTB');


        if ($datos->has('btnTBMB')){
            //TERAS A MEGAS 
            $r = $cantidad * 1024 * 1024;
            $resultado = 'El resulatdo a MG es: '.$r;

        } elseif ($datos->has('btnTBGB')){
            //TERAS A GIGAS
            $r = $cantidad * 1024;
            $resultado = 'El resulatdo a GB es: '.$r;
        }

        return $resultado;
    }

}
//ISSET