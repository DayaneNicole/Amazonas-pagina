@extends('layouts.main')

@section('section_title', 'Amazonas 632')

@section('content')
    {{-- Sección Principal --}}
    <div class="container my-5">
        <div class="row align-items-center">
            {{-- Contenido Izquierdo --}}
            <div class="col-md-6 text-center text-md-start">
                <h2 class="fw-bold text-danger mb-3" style="font-family: 'Georgia', serif;"><strong>Amazonas 632</strong></h2>
                <h3 class="fw-normal text-dark" style="font-size: 2rem;">Cafe-Bar-Restaurant</h3>
                <hr class="w-25 mx-auto mx-md-0 my-4 border-2 border-dark">
                <p class="text-muted fs-6">
                    En Amazonas 632, cada visita es un viaje de sabores. Desde el primer café de la mañana hasta esa cena especial, te invitamos a disfrutar de una experiencia única en un ambiente cálido y acogedor.
                </p>
                <p class="text-muted fs-6">
                    Relájate, desconéctate y deja que nuestros sabores frescos y auténticos te transporten. ¡Nos vemos en Amazonas 632, donde la buena comida, el café perfecto y los mejores momentos te esperan!
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

        {{-- Nueva Sección de la Chef --}}
        <div class="row my-5 align-items-center">
            {{-- Imagen de la Chef --}}
            <div class="col-md-6 text-center">
                <img src="{{ asset('assets/img/img/mozos.jpg') }}" alt="Chef Lourdes Cuba" class="img-fluid">
            </div>

            {{-- Texto de la Chef --}}
            <div class="col-md-6">
                <div class="p-4 bg-dark text-light position-relative" style="border: 2px solid rgb(241, 147, 54);">
                    <h3 class="text-danger fw-bold mb-3">MOZOS AMIGABLES</h3>
                    <p class="mt-3">
                        En Amazonas 632 no solo encontrarás deliciosos platos y café de primera, sino también un equipo que te hará sentir como en casa. Nuestro personal está siempre dispuesto a hacerte sonreír y brindarte un servicio cálido y cercano. 
                        Ven a disfrutar no solo de buena comida, sino también de una experiencia llena de amabilidad y atención personalizada. 
                    </p>
                    <p>
                        ¡Te esperamos con los brazos abiertos en Amazonas 632!
                    </p>
                </div>
            </div>
        </div>
    </div>

      {{-- Sección de Suscripción --}}
      <div class="row my-5">
        <div class="col-12 position-relative">
            <div class="subscription-section text-center py-5" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('{{ asset('assets/img/img/fondo3.jpg') }}') no-repeat center center; background-size: cover;">
                <h2 class="text-danger mb-4" style="font-size: 2.5rem;">Suscríbete y recibe muchos beneficios</h2>
                
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <form action="" method="POST" class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-envelope text-primary"></i>
                                        </span>
                                        <input type="email" class="form-control" name="email" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <span class="input-group-text bg-white">
                                            <i class="fas fa-user text-primary"></i>
                                        </span>
                                        <input type="text" class="form-control" name="nombre" placeholder="Nombres" required>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-danger px-5 py-2">Suscribirse</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="bg-custom text-light py-5">
    <div class="container">
        <div class="row">
            {{-- Logo y Descripción --}}
            <div class="col-lg-3 mb-4">
                <img src="{{ asset('assets/img/img/logo1.png') }}" alt="Amazonas632" class="mb-3" style="max-width: 200px;">
                <p class="text-muted small">
                    Amazonas 632 es más que un restaurante, es un hogar y lo demostramos en la calidez de nuestra atención en cada visita a esta casa.
                </p>
                <div class="social-links">
                    <a href="https://wa.me/970385862" alt="whatsapp"><img src="https://cdn-icons-png.flaticon.com/128/1384/1384007.png" alt="whatsapp" style="max-width: 20px;" /></a>
                    <a href="https://facebook.com" alt="facebook"><img src="https://cdn-icons-png.flaticon.com/128/2175/2175193.png" alt="facebook" style="max-width: 20px;" /></a>
                    <a href="https://instagram.com" alt="instagram"><img src="https://cdn-icons-png.flaticon.com/128/3670/3670274.png" alt="instagram" style="max-width: 20px;" /></a>
                </div>
            </div>

            {{-- Mapa del Sitio --}}
            <div class="col-lg-3 mb-4">
                <h5 class="text-white mb-4">Mapa del Sitio</h5>
                <ul class="list-unstyled text-muted">
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Inicio</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Carta</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Promociones</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Delivery</a></li>
                    <li class="mb-2"><a href="#" class="text-muted text-decoration-none">Reserva</a></li>
                </ul>
            </div>

            {{-- Casa Miraflores --}}
            <div class="col-lg-3 mb-4">
                <h5 class="text-white mb-4">Amazonas 632</h5>
                <ul class="list-unstyled text-muted">
                    <li class="mb-3">
                        <i class="fas fa-location-dot text-danger me-2"></i>
                        Jr. Amazonas 632<br>
                        Chachapoyas, Amazonas, Peru
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-envelope text-danger me-2"></i>
                        amazonas632@gmail.com
                    </li>
                    <li class="mb-3">
                        <i class="fas fa-phone text-danger me-2"></i>
                        +51 970 385 862
                    </li>
                </ul>
            </div>

            {{-- Casa La Molina --}}
            <div class="col-lg-3 mb-4">
                <h5 class="text-white mb-4">Ubicanos</h5>
                <ul class="list-unstyled text-muted">
                    <li><a href="https://www.google.com/maps/place/Tu+Ubicacion+Aqui" target="_blank" class="text-muted">Ubicanos</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

    {{-- Estilos adicionales --}}
    <style>
            .subscription-section {
        min-height: 400px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
    }

    .input-group-text {
        border: none;
    }

    .form-control {
        border: none;
        padding: 0.75rem;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: rgb(241, 147, 54);
    }
        
        footer a:hover {
            color: rgb(241, 147, 54) !important;
        }

        .social-links a {
            font-size: 1.2rem;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: rgb(241, 147, 54) !important;
        }

        .bg-custom {
        background-color: rgba(0, 0, 0, 0.7) /* Color azul oscuro, puedes cambiarlo */
    }
    </style>

    {{-- Asegúrate de incluir Font Awesome en tu layout principal --}}
    @push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    @endpush
@endsection
