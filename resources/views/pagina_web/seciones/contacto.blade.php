@if ($message = Session::get('success'))
    <div class="alert alert-success w-100">
        <p>{{ $message }}</p>
    </div>
@endif
<!--<div class="w-100 d-flex text-center">
    <img src="IMG/Contacto/Inicio Bimer.png" id="BimImg" class="BimImg img-fluid w-100">
</div>-->



<section class="text-center p-5">
    <h5 class="titlemain" style="text-transform: uppercase; color: #597FAB">Estás a un solo Click de que podamos ayudarte
    </h5>
</section>

<!--Información de contacto-->
<div class="container">
     @php
                    $url = route('bimsdatos.bimsdatosget');
                    $json = file_get_contents($url);
                    $data = json_decode($json, true);
                @endphp
                @if (!empty($data))
                    @foreach ($data as $item)
                    @if($item['id']===1)
    <div class="row">

        <!--mapa-->
        <div class="col-md-7 d-flex align-items-center">
            
                <iframe class="w-100 h-100"  style="border:0" loading="lazy" allowfullscreen
                    src="https://www.google.com/maps/embed/v1/place?q={{ $item['ubicaciontext'] }}&key=AIzaSyDzoFqNfpOSOcGtDd-gBfgNWFIm39BCndo"></iframe>
            
        </div>



        <div class="col-md-5 d-flex align-items-center text-center text-center">
            <div class="col-md-12">
                <h6 class="titleInfo mt-3 " style="text-transform: uppercase;">Encuéntranos</h6>

                <div class="container">
                    <div class="row justify-content-center">
                        <!--google maps-->
                        <div class="col-md-2 d-flex align-items-center justify-content-center">
                            <a href="{{ $item['ubicacionlink'] }}"
                                target="_blank" style="text-decoration: none;">
                                <i class="bi bi-geo-alt-fill text-primary " style="font-size: 30px;"></i>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <p class="textAdress" style="text-align: left;">{{ $item['ubicaciontext'] }}</p>
                        </div>
                    </div>
                </div>

                <h6 class="titleInfo mb-3" style="text-transform: uppercase;">¿Deseas que te contactemos?</h6>

                <div class="container">
                    <div class="row justify-content-center">
                        <!--teléfono-->
                        <div class="col-md-4">
                            <a class="text-decoration-none" href="tel:{{ $item['telefono'] }}">
                                <i class="fa-solid fa-phone text-primary " style="font-size: 30px;"></i>
                                <p>Teléfono</p>
                            </a>
                        </div>
                        <!--correo-->
                        <div class="col-md-4">
                            <a class="text-decoration-none" href="mailto: {{ $item['correo'] }}" target="_blank">
                                <i class="fa-solid fa-envelope text-primary" style="font-size: 30px;"></i>
                                <p>Correo</p>
                            </a>
                        </div>
                    </div>
                </div>

                <!--agendar cita directo-->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h6 class="titleInfo mb-3" style="text-transform: uppercase;">¡Agenda una cita directamente!
                            </h6>
                            <a href="{{ $item['calendarlink'] }}" target="_blank" class="text-decoration-none">
                                <i class="fa-solid fa-calendar-days text-primary" style="font-size: 30px;"></i>
                                <p>Agendar</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> @break
            @endif
            @endforeach
        @endif
    </div>


    <div class="container">
        <!-- Conoce nuestro nuevo servicio personalizado -->
        <div class="mt-5 rounded shadow mb-5">
            <div class="w-100">
                <!-- <div class="text-black text-center w-100 d-md-block mt-3">
                    <p class="titleBimerFirst p-3" style="text-transform:uppercase; color: #E4BC52;">¡Conoce nuestro nuevo servicio personalizado!</p>
                </div> -->

                <!--bimmer-->
                <div class="row d-flex justify-content-center align-items-center">

                    <div class=" col-md-5">
                        <img src="./IMG/imagen-bimer-presentacion.jpg" alt="..." class="img-fluid w-100"
                            style="font-size: 20px;">
                    </div>

                    <div class="col-md-7">
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="./IMG/Bimer-logo.jpg" class="w-100 h-100 mb-3" alt="desarrollo_de_software"
                                style="height: 70px;">
                        </div>
                        <div class="text-center">
                            <h4 class="titleBimer">¿Qué es este servicio?</h4>
                        </div>

                        <!--3 columnas (BIM a BIM s y BIM n)-->
                        <div class="row d-flex justify-content-center align-items-center p-3 text-center">
                            <div class="col-xs-12 col-md-12">
                                <p class="textBimer" style="text-align: left;">El servicio BIMER es un formato estándar
                                    para el intercambio de información personal, específicamente tarjetas personales
                                    electrónicas.

                                <p class="textBimer" style="text-align: left;">Contiene información de contacto como el
                                    cargo, los números de teléfono, las direcciones de correo electrónico, entre muchos
                                    otros datos importantes a la mano.</p>
                                </p>

                            </div>
                        </div>
                        <div class="w-100 d-flex align-items-center justify-content-center mb-5">
                            <a href="{{ env('URL_BIMER')}}" class="btn btn-primary rounded-pill">Ver mas <i
                                    class="fa fa-chevron-right" style="font-size: 20px;" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Formulario-->

<div id="formulario" class="w-100" data-aos="flip-up" data-aos-duration="3000">
    <!--Tittle-->
    <div class="w-100 p-3">
        <div id="title" class="text-center w-100 d-md-block">
            <h3 class="contactUser w-100" style="text-transform: uppercase; color: #597FAB">¿Deseas que te contactemos?</h3>
        </div>
    </div>
    <!--Formulario-->
    <div class="container w-100" style="margin-top: 24px; margin-bottom: 24px;">
        <form class="formFont p-5 text-black rounded w-100" style="background-color: #597FAB;" method="POST"
            action="{{ route('contactanos.storeP') }}" role="form" enctype="multipart/form-data">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <h2 class="completeForm text-center text-white mb-5" style="text-transform: uppercase;">completa el
                formulario</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline mb-3">
                        <label class="form-label" for="form6Example1">Nombre*</label>
                        <input type="text" id="form6Example1" name="nombre" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">Apellidos*</label>
                        <input type="text" id="form6Example2" name="apellidos" class="form-control" />

                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Email input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="form6Example5">E-mail*</label>
                        <input type="email"name="email" id="form6Example5" class="form-control" />

                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <!-- Number input -->
                    <div class="form-outline">
                        <label class="form-label" for="form6Example6">Teléfono*</label>
                        <input type="tel" name="telefono" id="form6Example6" class="form-control" />
                    </div>
                </div>
            </div>
            <h2 class="subtitleMain text-center mb-5">Información Profesional</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Empresa*</label>
                        <input type="text" name="empresa" id="form6Example6" class="form-control" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Puesto/Cargo*</label>
                        <input type="text" name="puesto" id="form6Example6" class="form-control" />
                    </div>
                </div>
            </div>
            <!-- Message input -->
            <div class="form-outline mb-5 text-center">
                <label class="form-label mt-2" for="form6Example7">Escribe tu mensaje aquí*</label>
                <textarea class="form-control" name="mensaje" id="form6Example7" rows="4"></textarea>
            </div>
            <!--boton enviar-->
            <div class="text-center">
                <button type="submit" class="btnSendForm btn btn-primary " style="opacity: 0.83; ">Enviar</button>
            </div>
        </form>
    </div>
</div>

<!--title-->
<div class="w-100">
    <div id="title" class="text-black text-center w-100 d-md-block p-3" style="background-color: #fff;">
        <h3 class="inviteUser" style="text-transform: uppercase; color: #597FAB">¿Te gustaría formar parte del equipo?
        </h3>
        <h4 class="textFinalSearch"> Estamos buscando personas apasionadas que quieran hacer la diferencia.</h4>
    </div>
</div>

<!-- Submit button -->
<div class="w-100 d-flex align-items-center justify-content-center mb-5">

    <a href="/Empleate" class="text-decoration-none">
        <button type="button"
            class="btn btn-primary btn-block btn-lg mb-4 d-flex align-items-center justify-content-center">
            <span class="btngoempleate">Ir
                a la sección "Empléate"</span>
            <i class="fa-solid fa-briefcase ms-2" style="font-size: 30px;"></i>
        </button>

    </a>
</div>
<!--animaciones-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 2000,
        once: true
    });
</script>


<!--estilo de fuentes-->
<style>
    .textFinalSearch {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: normal;
    }

    .btn {
        transition: background-color .5s;
        background-color: #141A43;
        font-family: 'Poppins', sans-serif;
        font-size: 25px;
        font-weight: normal;
    }

    .btn:hover {
        color: #141A43;
        background-color: #FFFFFF;
        transform: translateY(-2px);
    }

    .textBimer {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
    }

    .titleBimer {
        font-family: 'Poppins', sans-serif;
        font-size: 40px;
        font-weight: normal;
    }

    .titleBimerFirst {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: bold;
    }

    .titlemain {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: bold;
    }

    .contactUser {
        font-family: 'Poppins', sans-serif;
        font-weight: bold;
    }

    .titleInfo {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: bold;
    }

    .textAdress {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
    }

    .formFont {
        font-family: 'Poppins Light', sans-serif;
        font-size: 25px;
    }

    .btnSendForm {
        transition: background-color .5s;
        background-color: #000;
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
        width: 200px;

    }

    .inviteUser {
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: normal;
    }

    .text-color-empleate {
        color: #E4BC52;
        margin-left: 5px;
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: bold;
    }

    .btngoempleate {
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: bold;
    }

    .form-label {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
        color: #FFFFFF;
    }

    .completeForm {
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: 500;
    }

    .subtitleMain {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: normal;
        color: #FFFFFF;
    }
</style>
