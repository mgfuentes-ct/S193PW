@extends('layouts.plantilla')



@section('titulo','Componentes Blade')

@section('contenido')


<x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar"> 
    Soy el contenido del primero
</x-Card>
<x-Card encabezado="Componente2" titulo="Dinamico2" textoBoton="No guardar">
    Soy el contenido del segundo
</x-Card>

@endsection