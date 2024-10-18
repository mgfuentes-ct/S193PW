@extends('layouts.plantilla')
@section('titulo','Convertidor')



@section('contenido')

<div class="container mt-5 col-md-6" style="background-color: #f5e6e2;" >
  <div class="card-body" >
  <h1>MB</h1>
    <form action="/enviarDatosMB" method="POST">
        @csrf
        <div class="mb-3">
            <label for="unidadMB" class="form-label">Escriba la cantidad a convertir... </label>
            <input type="text" class="form-control" name="txtunidadMB">
        </div>
        <div class="mb-3">
            <label for="resultadoMB" class="form-label">Resultado:</label>
            <!--<input type="text" class="form-control" name="txtresultadoMB">-->
        </div>
        <button type="submit" class="btn btn-dark" name="btnMBGB">GB</button>
        <button type="submit" class="btn btn-dark" name="btnMBTB">TB</button>

    </form><BR>
  </div>
</div>
<BR>
<div class="container mt-5 col-md-6" style="background-color: #f5e6e2;">
  <div class="card-body" >
  <h1>GB</h1>
    <form >
        <div class="mb-3">
            <label for="unidadGB" class="form-label">Escriba la cantidad a convertir... </label>
            <input type="text" class="form-control" name="txtunidadGB">
        </div>
        <div class="mb-3">
            <label for="resultadoGB" class="form-label">Resultado:</label>
            <!--<input type="text" class="form-control" name="txtresultadoGB">-->
        </div>
        <button type="submit" class="btn btn-dark" name="btn">MB</button>
        <button type="submit" class="btn btn-dark" name="btn">TB</button>

    </form><br>
  </div>
</div>
<BR>

<div class="container mt-5 col-md-6" style="background-color: #f5e6e2;">
  <div class="card-body" >
  <h1>TB</h1>
    <form >
        <div class="mb-3">
            <label for="unidadTB" class="form-label">Escriba la cantidad a convertir... </label>
            <input type="text" class="form-control" name="txtunidadTB" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="resultadoTB" class="form-label">Resultado:</label>
            <!--<input type="text" class="form-control" name="txtresultadoTB">-->
        </div>
        <button type="submit" class="btn btn-dark" name="btn">MB</button>
        <button type="submit" class="btn btn-dark" name="btn">GB</button>

    </form><br>
  </div>
</div><br>

@endsection