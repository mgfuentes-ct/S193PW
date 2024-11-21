
@extends('layouts.plantilla')
@section('titulo','Actualizar')

@section('contenido')  <!-- comienza aqui -->

        {{-- inicia Tarjeta con formulario --}}

        {{--@dump($id)--}}

        <div class="container mt-5 col-md-6">

            
        @if(session('exito'))
            <x-Alert tipo="success">{{session('exito')}}</x-Alert>
        @endif

        @session('exito')
            {! <script>Swal.fire({
            title: "Respuesta Servidor", //titulo del mensaje
            text: '{{ $value }}', //texto en el mensaje 
            icon: "success" //icno para el alert
            }); </script> !}
        @endsession

            <div class="card font-monospace">
            <div class="card-header fs-5 text-center text-primary">
                 {{__('Actualizar Clientes') }}
            </div>
            <div class="card-body text-justify ">
                <form action="{{route('rutaEnviarActualizar', $consultaclientes->id)}}" method="POST"> {{-- se agrega la nueva ruta de actualizacion con el id porque si no no funciona--}}
                    @csrf
                    
                    <div class="mb-3">
                    <label for="nombre" class="form-label">{{__('Nombre')}}: </label>
                    <input type="text" class="form-control" name="txtnombre" value=" {{$consultaclientes -> nombre }} " >
                    <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
                    </div>

                    <div class="mb-3">
                    <label for="Apellido" class="form-label">{{__('Apellido')}}: </label>
                    <input type="text" class="form-control" name="txtapellido" value=" {{$consultaclientes->apellido}} ">
                    <small class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
                    </div>

                    <div class="mb-3">
                    <label for="correo" class="form-label">{{__('Correo')}}: </label>
                    <input type="text" class="form-control" name="txtcorreo" value=" {{$consultaclientes -> correo}} ">
                    <small class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
                    </div>

                    <div class="mb-3">
                    <label for="telefono" class="form-label">{{__('Telefono')}}: </label>
                    <input type="text" class="form-control" name="txttelefono" value=" {{$consultaclientes -> telefono}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
                    </div>
            </div>
            <div class="card-footer text-muted">
                    <div class="d-grid gap-2 mt-2 mb-1">
                        <button type="submit" class="btn btn-success btn-sm"> {{__('Actualizar Cliente')}} </button>
                    </div>
                    </form>
                </div>
            </div>
        </div> {{-- divcontainer --}}
        {{-- Finaliza Tarjeta con formulario --}}

@endsection <!-- termina aca --> 