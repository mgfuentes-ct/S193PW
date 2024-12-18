<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\validadorCliente;
use Carbon\Carbon;

class clienteControlador extends Controller
{
    /**
     * aqui va la consulta de todo el crud
     */
    public function index()
    {
        $consultaclientes = DB::table('clientes')->get();
        return view('clientes',compact('consultaclientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Aqui va todo lo del insert 
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');

        session()->flash('exito','Se guardo el usuario: '.$usuario);

        return to_route('rutaForm');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $consultaclientes = DB::table('clientes')->where('id', $id)->first();
        return view('actualizar', compact('consultaclientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //aqui estara la logica para editar

        $validar = $request->validate([
            'txtnombre'=> 'required|min:4 |max:20 ',
            'txtapellido'=> 'required',
            'txtcorreo'=> 'required|email',
            'txttelefono'=> 'required|numeric'
        ]);

        DB::table('clientes')->where('id',$id)->update([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "updated_at" => Carbon::now(),
        ]);

        session()->flash('exito','Se actualizo el usuario corretamente');
        return redirect()->route('rutaActualizar',['id'=>$id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id',$id)->delete();

        session()->flash('exito','Se elimino el usuario correctamente');
        return redirect()->route('rutaClientes');
    }
}
