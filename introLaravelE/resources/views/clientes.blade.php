
@extends('layouts.plantilla')
@section('titulo','Clientes')
@section('contenido')


    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

        @foreach ($consulta as $cliente)
        

    <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
            {{$cliente->nombre}} - {{$cliente->apellido}}
        </div>

        <div class="card-body">
        <h5 class="fw-bold">{{$cliente->correo}}</h5>
        <h5 class="fw-medium">{{$cliente->telefono}}</h5>
        <p class="card-text fw-lighter"></p>
        </div>

        <div class="card-footer text-muted">
            <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning btn-sm">{{__('Actualizar')}}</a>

            <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE') <!-- Método HTTP DELETE -->
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este cliente?')">
                    {{__('Eliminar')}}
                </button>
            </form>
        </div>

    </div>
    @endforeach
    </div>
    {{-- Finaliza tarjetaCliente --}}

@endsection