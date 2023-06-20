<div class="w-100 d-flex text-center">
    <img src="IMG/developed-portada.jpg" id="BimImg" class="BimImg img-fluid w-100" style="height: 460px;">
</div>

<!--Información de contacto-->
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex align-items-center text-center text-center">
            <div class="col-md-12">
                <h5 class="createTecText mt-5 " style="text-transform: uppercase;">Creando tecnologías nuevas para ti
                </h5>
                <div class="container p-5">
                    <div class="row justify-content-center">
                        <div class="col-md-3">
                            <a href="marketing.php">
                                <i class=" fa-solid fa-bullhorn text-warning" target="_blank"
                                    style="font-size: 30px;"></i>
                            </a>
                            <a href="marketing.php" class="text-decoration-none ">
                                <p class="text-icons-start">Publicita tu marca</p>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#servicios" style="text-decoration: none;">
                                <i class="fa-solid fa-bell-concierge text-secondary" style="font-size: 30px;"></i>
                            </a>
                            <a href="#servicios" class="text-decoration-none">
                                <p class="text-icons-start">Servicios</p>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="#beneficios">
                                <i class="fa-solid fa-thumbs-up text-success" style="font-size: 30px;"></i>
                            </a>
                            <a href="#beneficios" class="text-decoration-none">
                                <p class="text-icons-start">Beneficios</p>
                            </a>
                        </div>

                        <div class="col-md-3">
                            <a href="contacto.php">
                                <i class="fa-solid fa-address-book text-primary" style="font-size: 30px;"></i>
                            </a>
                            <a href="contacto.php" class="text-decoration-none">
                                <p class="text-icons-start">Contacto</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container" id="marca">
    <h2 class="textInicialKnow text-center">Conoce nuestros servicios de <br>desarrollo tecnológico </h2>
    <p class="textConocenos p-4 lh-base"> En Business in Motion Studio, entendemos que cada empresa es única, y
        adaptamos nuestras soluciones a tus necesidades específicas. Ya sea que seas una pequeña empresa en crecimiento
        o una organización establecida, estamos preparados para ayudarte a aprovechar al máximo las tecnologías de la
        información y alcanzar tus metas comerciales.</p>
    <p class="textConocenos lh-base">Descubre el potencial ilimitado de las tecnologías de la información. Permítenos
        ser tu socio de confianza en tu viaje hacia el éxito digital.</p>
</div>

<!--web-->
 @php
            $url = route('cards.indexG', 'CardsDesarrolloTecnologico');
            $json = file_get_contents($url);
            $data = json_decode($json, true);
        @endphp
        @if (!empty($data))
            @foreach ($data as $item)
<div class="card d-flex justify-content-center align-items-center">
    <div class="container">
        <h2 class="createWebSites text-center mt-3 mb-3" id="servicios">{{ $item['titulo'] }}</h2>
        <hr>
    </div>

    <img src="{{ asset($item['img']) }}"
        class="card-img-top img-fluid mx-auto d-block w-50 h-50 p-3" alt="computadora">

    <div class="col-10">
        <p class="descriptionWeb p-3 lh-base">{{ $item['descripcion'] }}</p>
    </div>
</div>
 @endforeach
        @endif


<!--Ponte en contacto con nosotros-->
<div class=" d-flex justify-content-center align-items-center p-5">
    <div class="d-flex justify-content-center align-items-center">
        <h3 class="textContact mt-2 col-md-11" style="text-align: center;">Ponte en contacto con nosotros para más info
        </h3>
        <div class="d-flex align-items-center justify-content-center">
            <a href="contacto.php" class="text-decoration-none">
                <button type="button"
                    class="contactoBtn1 btn btn-primary btn-block btn-lg d-flex align-items-center justify-content-center">
                    <span class="textContactC">Contacto</span>
                    <i class="fa-solid fa-address-book ms-2" style="font-size: 25px;"></i>
                </button>
            </a>
        </div>

    </div>
</div>

<!--scrirpts-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<!--estilos de fuentes y botones-->
<style>
    .contactoBtn1 {
        transition: background-color .5s;
        background-color: #141A43;
        font-family: 'Poppins', sans-serif;
        font-size: 25px;
        font-weight: normal;
    }

    .contactoBtn1:hover {
        color: #141A43;
        background-color: #FFFFFF;
    }

    .textInicialKnow {
        font-family: 'Poppins', sans-serif;
        font-size: 60px;
        font-weight: 500;
    }

    .textConocenos {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: normal;
        text-align: center;
    }

    .text-icons-conocenos {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: bold;
    }

    .createTecText {
        font-family: 'Poppins', sans-serif, ;
        font-size: 45px;
        font-weight: bold;
    }

    .createWebSites {
        font-family: 'Poppins', sans-serif;
        font-size: 46px;
        font-weight: 500;
        color: #597FAB;
    }

    .descriptionWeb {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: normal;
        text-align: justify;
    }

    .textContact {
        font-family: 'Poppins', sans-serif;
        font-size: 34px;
        font-weight: bold;
        color: #DD801F;
    }

    .textContactC {
        font-family: 'Poppins', sans-serif;
        font-size: 25px;
        font-weight: normal;
    }

    .text-icons-start {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: bold;
        color: #000;
        margin-top: 10px;
    }
</style>
