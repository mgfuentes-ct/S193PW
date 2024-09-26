<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Document</title>
    <style>
        body, html {
            height: 100%;
        }
        .full-heigt {
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="d-flex flex-column justify-content-center align-item-center text-center full-height">
        <h1 class="display-1">Bienvenido Turista</h1>
        <p>Presiona el botón para continuar.....</p>

        <a href="{{ route('rutaformulario') }}" class="btn btn-primary">Ir al registro</a>
        {{-- <a href="/formulario" class="btn btn-danger">Ir al registro </a>}}
    </div>
</body>
</html>