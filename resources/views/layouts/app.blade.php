<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-light h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'CMS BIM' }}</title>
    <!-- iconos -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <!-- filtrador -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#filtroTabla').keyup(function() {
                var value = $(this).val().toLowerCase();
                $('#tablaSuscripciones tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        .floating-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 999;
        }

        #color-invert-button {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 18px;
        }
    </style>
</head>

<body class="bg-light h-100">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    CMS de BIM
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @auth
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item dropdown rounded mx-3">
                            <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Qué hacemos</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CardsBIMAnalytics') }}">Cards BIM Analytics</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CardsBIMStudio') }}">Cards BIM Studio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CardsLineasNegocio') }}">Cards de Lineas de Negocio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('carruseles') }}">Carrusel</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown rounded mx-3">
                            <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Contacto</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('personals') }}">Personal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('empletes') }}">Empleadores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('contactanos') }}">Prospectos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown rounded mx-3">
                            <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Inicio</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CarruselInicio') }}">Carrusel de Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CardsInicio') }}">Cards de Inicio</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown rounded mx-3">
                            <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Quienes Somos</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','Clientes') }}">Clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('familias') }}">Nuestra Familia</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CardsNoSomos') }}">Cards No somoss</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown rounded mx-3">
                            <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Que ofrecemos</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ asset('pvideos') }}">Proyectos Videos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CardsQueofrecemos') }}">Cards Que ofrecemos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CardsNuestrosServicios') }}">Cards Nuestros Servicios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CardsMarketing') }}">Cards Marketing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cards.indexP','CardsDesarrolloTecnologico') }}">Cards Desarrollo Tecnologico</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ asset('bimsdatos') }}">Nosotros</a>
                        </li>
                    </ul>
                    @endauth

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="floating-button">
            <button id="color-invert-button" class="btn btn-primary"><i class="bi bi-brush-fill"></i></button>
        </div>
        <script>
            const colorInvertButton = document.getElementById('color-invert-button');

            let colorInverted = false;

            colorInvertButton.addEventListener('click', function() {
                if (colorInverted) {
                    document.body.style.filter = 'none';
                } else {
                    document.body.style.filter = 'invert(100%)';
                }
                colorInverted = !colorInverted;
            });
        </script>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>