<div class="container mt-4">

    <div class="card">
    <div class="card-header">
        {{ $encabezado }}    <!---Encabezado -->
    </div>


    <div class="card-body">
        <h5 class="card-title">{{ $titulo }}</h5> <!--Titulo-->
        <p class="card-text"> {{ $slot}} </p>
        <a href="#" class="btn btn-primary">{{ $textoBoton }}</a> <!--Link disfrazado de boton-->
    </div>
    </div>

</div>
