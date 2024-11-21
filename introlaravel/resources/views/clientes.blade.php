
@extends('layouts.plantilla')
@section('titulo','Clientes')
@section('contenido')


    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">
        
    <script>
        function confirmDelete(clienteId){
            Swal.fire({
                title: "¿Estás seguro de eliminar este cliente?",
                text: "Esta acción no se puede deshacer",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: 'Eliminar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire('Cliente eliminado correctamente', '', 'success').then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "/cliente/eliminar/" + clienteId;
                        }
                    });
                }
            });
        }
    </script>

    @foreach ($consultaclientes as $cliente)



    <div class="card text-justify font-monospace mt-4">

        <div class="card-header fs-5 text-primary">
        {{ $cliente->nombre }}
        </div>

        <div class="card-body">
        <h5 class="fw-bold">{{ $cliente->correo }}</h5>
        <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
        <p class="card-text fw-lighter"></p>
        </div>

        <div class="card-footer text-muted">
        <a type="submit" class="btn btn-warning btn-sm" href="{{route('rutaActualizar', $cliente->id)}}">{{__('Actualizar')}}</a>
        <a type="submit" class="btn btn-danger btn-sm" onclick="confirmDelete({{ $cliente->id }})">{{__('Eliminar')}}</a>
        </div>



    </div>
    @endforeach
    {{-- Finaliza tarjetaCliente --}}

@endsection