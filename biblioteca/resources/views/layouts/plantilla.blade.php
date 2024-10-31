<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])

</head>
<body class="d-flex flex-column min-vh-100">
    {{-- inicia navbar --}}
    <nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('rutainicio')}}">Biblioteca UPQ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Más</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('rutainicio')}}">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('rutaregistro')}}">Registro del libro</a>
            </li>
            </ul>
        </div>
        </div>
    </div>
    </nav>
    {{-- Finaliza navbar --}}

    <!-- Especificamos donde ira el contenido -->
     
        @yield('contenido')


    <div class="card ">
        <div class="card-body">
            <h5 class="card-title">©Biblioteca UPQ</h5>
            <p class="card-text">31 de Octubre del 2024</p>
        </div>
    </div>
</body>
</html>