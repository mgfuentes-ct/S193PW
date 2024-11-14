<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>

    @vite(['resources/js/app.js'])

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    {{-- inicia navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand">{{__('Turista sin Maps')}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{route('rutaInicio')}}">{{__('Inicio')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rutaForm')?'text-warning':'' }}" href="{{route('rutaForm')}}">{{__('Registro Clientes')}}</a> <!--Buscafr comop funciona este codigo-->
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('rutaClientes')?'text-warning':'' }}" href="{{route('rutaClientes')}}">{{__('Consulta Clientes')}}</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    {{-- Finaliza navbar --}}

    <!-- especificar donde estara el contenido -->
     @yield('contenido')

</body>
</html>