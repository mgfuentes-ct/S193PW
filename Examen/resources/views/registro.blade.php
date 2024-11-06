<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    {{--@dump($id)--}}
    <h1>Registro de prendas</h1>
    @session('exito')
                {!<script>Swal.fire({
                title: "Respuesta del servidor",
                text: "{{ $value }}",
                icon: "success"
                });</script>!}
            @endsession
<form action="/enviarPrenda" method="POST">
    @csrf
        <label for="prenda" class="form-label">Prenda</label>
        <input type="text" class="form-control" name="txtprenda">
        <label for="color" class="form-label">Color</label>
        <input type="text" class="form-control" name="txtcolor">
        <label for="cantidad" class="form-label">Cantidad</label>
        <input type="text" class="form-control" name="txtcantidad">
        <button type="submit" class="btn btn-primary">Guardar prenda</button>
    </form>
</body>
</html>