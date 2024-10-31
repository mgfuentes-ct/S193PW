@extends('layouts.plantilla')
@section('titulo','Inicio')

@section('contenido')
<br>
<div class="flex-grow-1 d-flex aling-item-center justify-content-center mt-5">
    <div class="d-flex flex-column justify-content-center aling-items-center text-center full-height">
        <h1 class="display-1">Bienvenido a la Biblioteca UPQ</h1>
        <p>Presiona el botón para registrar...</p>
        <a href="{{route('rutaregistro')}}" class="btn btn-outline-info">Ir al registro</a><br>
        
        <div class="d-flex flex-row gap-3 mt-4 justify-content-center">
            <div class="card" style="width: 18rem;">
                <img src="https://www.eluniversal.com.mx/resizer/v2/5JFZZQV6BNABTGKI6GSJWZGS7Y.jpg?auth=d8bc39bb4bf75ed720c54c0015a42605ae15edfa2e4709865277b45c622fe350&smart=true&width=1100&height=666" class="card-img-top" height="170px">
                <div class="card-body">
                    <p class="card-text">Nadia López García, nueva coordinadora nacional de Literatura del INBAL, es una poeta mixteca reconocida por su obra en lenguas indígenas y su trayectoria internacional. Entre sus logros destacan el Premio Cenzontle y la beca de la Fundación para las Letras Mexicanas.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://images.sipse.com/z1WyBG4PdfOUSamHrsUaETXKMeY=/820x508/smart/filters:format(webp)/2024/10/29/1730222390364.png" class="card-img-top" height="170px">
                <div class="card-body">
                    <p class="card-text">La escritora Margaret Atwood, de 84 años, calificó a la inteligencia artificial (IA) como “una poeta de mierda” y dijo no preocuparse por su impacto en la literatura, aunque cree que los jóvenes sí deberían hacerlo. Conocida por The Handmaid's Tale, Atwood trabaja ahora en unas memorias donde solo incluye “estupideces y catástrofes”.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://www.udg.mx/sites/default/files/styles/noticia_nodo_550x450/public/img_noticias/241028_gabriela-cabezon-camara-obtiene-el-premio-de-literatura-sor-juana-ines-de-la-cruz-de-la-fil_fil-3.jpg?itok=T0yoH_oB" class="card-img-top" height="170px">
                <div class="card-body">
                    <p class="card-text">Gabriela Cabezón Cámara ganó el Premio de Literatura Sor Juana Inés de la Cruz 2024 por Las niñas del naranjel, que reinterpreta la vida de Catalina de Erauso y destaca voces marginadas. La entrega será el 4 de diciembre en la Feria Internacional del Libro de Guadalajara. El premio reconoce el trabajo de escritoras en el mundo hispano y está dotado con diez mil dólares.</p>
                </div>
            </div>
        </div>
        
    </div>
</div><br><br>


@endsection
