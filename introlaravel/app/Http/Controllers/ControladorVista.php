<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVista extends Controller
{
    /*USAMOS ENSTE CONTROLADOR PARA ADMINISTARR LA LOGICA DE LAS VISTAS*/ 
    public function home()
    {
        //nos manda a la pagina de inicio
        return view('inicio');
    }


    public function formulario()
    {
        //nos manda a la pagina del formulario
        return view('formulario');
    }

    public function consulta()
    {
        //nos manda a la pagina de los clientes
        return view('clientes');
    }

    public function procesarCliente(Request $peticion)
    {
        //nos manda a la pagina de los clientes
        //return 'Si llego la info del cliente :)'; //es una cadena de texto 
        //return $peticion->all();
        //return $peticion->path();
        //return $peticion->url();
        //return $peticion->ip();

        //respuestas de redireccion 

        //return redirect('/');   //sejecuta cuando se haga el clic al formulario y hace la redireccion

        //return redirect()->route('rutaClientes');

        // redirige al origen de la peticion (regresate por donde vienes)
        //return back();

        //redireccion con variable 
        //$id = [['usuario'=>1],['usuario'=>2]];
        //return view('formulario',compact('id'));

        $usuario = $peticion->input('txtnombre');
        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route('rutaForm');
    } 
}
