@extends('layouts.plantilla')
@section('titulo','Inicio')

@section('contenido')

<div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
    <h1 style="margin-top: 100px">Sistema de conversion MB/GB/TB</h1><br>
    <h3>Maria Gudalupe Fuentes Acosta</h3>
    <h3>S193</h3><br>
    <a href="{{route('rutaConvertidor')}}" class="btn btn-dark">Convertir</a>
    
@endsection