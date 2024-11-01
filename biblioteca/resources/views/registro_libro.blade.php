@extends('layouts.plantilla')
@section('titulo','Registro')
@section('contenido')
<br><br>
{{--@dump($id)--}}
<div class="d-flex justify-content-center mt-5">
    <div class="col-md-6 col-lg-6">


        <div class="card">
            <div class="card-header fs-5 text-center">
                <h1>{{__('Registro del Libro')}}</h1>
            </div>
            
            @session('EXITO')
                {!<script>Swal.fire({
                title: "Respuesta del servidor",
                text: "{{ $value }}",
                icon: "success"
                });</script>!}
            @endsession
            <div class="card-body text-justify">
                <form action="/enviarLibro" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="txtisbn" value="{{ old('txtisbn')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtisbn')}}</small>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">{{__('Titulo')}}</label>
                    <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txttitulo')}}</small>
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">{{__('Autor')}}</label>
                    <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtautor')}}</small>
                </div>
                <div class="mb-3">
                    <label for="paginas" class="form-label">{{__('Páginas')}}</label>
                    <input type="text" class="form-control" name="txtpaginas" value="{{ old('txtpaginas')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtpaginas')}}</small>
                </div>
                <div class="mb-3">
                    <label for="año" class="form-label">{{__('Año')}}</label>
                    <input type="text" class="form-control" name="txtaño" value="{{ old('txtaño')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtaño')}}</small>
                </div>
                <div class="mb-3">
                    <label for="editarial" class="form-label">{{__('Editorial')}}</label>
                    <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txteditorial')}}</small>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">{{__('Email de Editorial')}}</label>
                    <input type="text" class="form-control" name="txtemail" value="{{ old('txtemail')}}">
                    <small class="text-danger fst-italic">{{ $errors->first('txtemail')}}</small>
                </div>
                <button type="submit" class="btn btn-outline-success btn-lg">{{__('Enviar')}}</button>
                </form>
            </div>
            
        </div>
        
    </div>
    
</div><br><br>


@endsection