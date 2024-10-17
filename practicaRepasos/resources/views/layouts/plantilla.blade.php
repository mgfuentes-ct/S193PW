<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    @vite(['resources/js/app.js'])
    <meta http-equiv="X-UA-Compatible" content="id-edge">
</head>
<body style="background-color: #f6d6cd;">
{{-- inicia navbar --}}
<div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
    <div class="bg-dark p-4">
        <a href="{{route('rutaInicio')}}" class="btn btn-dark">Inicio</a>
        <a href="{{route('rutaConvertidor')}}" class="btn btn-dark">Convertidor</a>
    </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
{{-- Finaliza navbar --}}

 @yield('contenido')
</body>
</html>