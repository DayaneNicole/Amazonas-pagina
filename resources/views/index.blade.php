@extends('layouts.main')

@section('section_title', 'Amazonas 632')

@section('content')
    {{-- Sección Principal --}}
    <div class="container my-5">
        <div class="row align-items-center">
            {{-- Contenido Izquierdo --}}
            <div class="col-md-6 text-center text-md-start">
                <h2 class="fw-bold text-danger mb-3" style="font-family: 'Georgia', serif;">Amazonas 632 </h2>
                <h3 class="fw-normal text-dark" style="font-size: 2rem;">Cafe-Bar-Restaurant</h3>
                <hr class="w-25 mx-auto mx-md-0 my-4 border-2 border-dark">
                <p class="text-muted fs-6">
                    En Amazonas 632, cada visita es un viaje de sabores. Desde el primer café de la mañana hasta esa cena especial, te invitamos a disfrutar de una experiencia única en un ambiente cálido y acogedor. 
                </p>
                <p class="text-muted fs-6">
                    Relájate, desconéctate y deja que nuestros sabores frescos y auténticos te transporten. ¡Nos vemos en Amazonas 632, donde la buena comida, el café perfecto y los mejores momentos te esperan!"
                </p>
                {{-- Botón Leer Más --}}
                <a href="#" class="btn btn-danger px-4 py-2 mt-3">Leer Más</a>
            </div>

            {{-- Imágenes Derecha --}}
            <div class="col-md-6 d-flex justify-content-center">
                <div class="row">
                    <div class="col-6 mb-4">
                        <img src="{{ asset('assets/img/img/123.jpg') }}" alt="Sabores Peruanos 1" class="img-fluid border border-2 border-danger rounded">
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('assets/img/img/123.jpg') }}" alt="Sabores Peruanos 2" class="img-fluid border border-2 border-danger rounded">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
