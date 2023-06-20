<nav class="navbar navbar-expand-md navbar-dark sticky-top w-100" style="background-color: #141A43;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('web') }}">
            <img id='logobim' class='w-100' src='{{ asset("IMG/Logo BIM.png") }}'>
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mx-auto">

                <li class="nav-item active rounded px-3">
                    <a class="nav-link text-white" aria-current="page" href="{{ route('web') }}">INICIO</a>
                </li>

                <li class="nav-item rounded px-3">
                    <a class="nav-link text-white" href="{{ route('qsomos') }}">QUIÉNES SOMOS</a>
                </li>

                <li class="nav-item dropdown rounded px-3">
                    <a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" href="#">QUÉ HACEMOS</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('qhacemos') }}">Qué Hacemos</a></li>
                        <li><a class="dropdown-item" href="{{ route('bims') }}">BIM Studio</a></li>
                        <!-- <li><a class="dropdown-item" href="{{ route('bima') }}">BIM Analytics</a></li> -->
                    </ul>
                </li>

                <li class="nav-item dropdown rounded px-3">
                    <a class="nav-link active text-white dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" href="#">QUÉ OFRECEMOS</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('qofrecemos') }}">Que Ofrecemos</a></li>
                        <li><a class="dropdown-item" href="{{ env('URL_BIMER')}}">Bimer</a></li>
                        <li><a class="dropdown-item" href="{{ route('marketing') }}">Marketing</a></li>
                        <li><a class="dropdown-item" href="{{ route('consultoria') }}">Consultoría</a></li>
                        <li><a class="dropdown-item" href="{{ route('conocenos') }}">Desarrollo Tecnológico</a></li>
                        <li><a class="dropdown-item" href="{{ route('pvideografica') }}">Producción Videográfica</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown rounded px-3">
                    <a class="nav-link active text-white dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" href="#">CONTACTO</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('contacto') }}">Contacto</a></li>
                        <li><a class="dropdown-item" href="{{ route('empleat') }}">Empléate</a></li>
                    </ul>
                </li>

                <li class="nav-item rounded px-3">
                    <a class="nav-link text-white" href="{{ env('URL_BIMER')}}">BIMER</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Estilos-->

<style>
    .nav-link {
        font-family: 'Poppins', sans-serif;
        font-weight: normal;
        font-size: 17px;
    }

    .dropdown-item {
        font-family: 'Poppins', sans-serif;
        font-weight: normal;
        font-size: 17px;
    }

    .nav-item {
        transition: background-color 0.5s;
    }

    .nav-item:hover {
        background-color: #DC3434;
    }

    .dropdown-item {
        transition: background-color 0.5s;
    }

    .dropdown-item:hover {
        color: #FFFFFF;
        background-color: #DC3434;
    }
</style>
