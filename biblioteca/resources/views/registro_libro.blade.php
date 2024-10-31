@extends('layouts.plantilla')
@section('titulo','Registro')
@section('contenido')
<br><br>
<div class="d-flex justify-content-center mt-5">
    <div class="col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header fs-5 text-center">
                <h1>Registro de Libro</h1>
            </div>
            <div class="card-body text-justify">
                <form>
                <div class="mb-3">
                    <label for="isbn" class="form-label">ISBN</label>
                    <input type="text" class="form-control" name="txtisbn">
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="txttitulo">
                </div>
                <div class="mb-3">
                    <label for="autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="txtautor">
                </div>
                <div class="mb-3">
                    <label for="paginas" class="form-label">Páginas</label>
                    <input type="text" class="form-control" name="txtpaginas">
                </div>
                <div class="mb-3">
                    <label for="año" class="form-label">Año</label>
                    <input type="text" class="form-control" name="txtaño">
                </div>
                <div class="mb-3">
                    <label for="editarial" class="form-label">Editorial</label>
                    <input type="text" class="form-control" name="txteditorial">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email de Editorial</label>
                    <input type="text" class="form-control" name="txtemail">
                </div>
                <button type="submit" class="btn btn-outline-success btn-lg">Enviar</button>
                </form>
            </div>
            
        </div>
        
    </div>
    
</div><br><br>


@endsection