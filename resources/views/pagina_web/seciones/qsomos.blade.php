</div>
<!--portada-->
<div class="w-100">
    <img src="IMG/BIMER-ECT.jpg" id="BimImg" class="BimImg" style="width:100%;
    height:auto;">
</div>

<!--efecto type-->
<div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-12 p-5 mb-3">
        <article class="effecttype">Somos un concepto empresarial <span class="effecttype" style="color: #141A43;">Joven,
                Innovador y Eficiente.</span></article>
    </div>
</div>

<!--3 columnas (BIM a BIM s y BIM n)-->

<div class="container">
    <div class="row">

        <div class="col-md-4 mx-auto" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="text-center mb-3">
                <span class="titleServicesB" style="color:red;">NO</span>
                <span class="titleServicesB ">Somos</span>
            </div>
            <div class="d-flex justify-content-center align-items-center p-3">
                <div class="circle-icon">
                    <i class="fa-solid fa-users" style="font-size: 25px; color:#FFFFFF"></i>
                </div>
            </div>
            <p class="servicesTextB p-3 lh-lg" style="text-align: justify; ">La empresa que trabaja con deslealtad y
                falta de compromiso.
            </p>
        </div>

        <div class="col-md-4 mx-auto" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="text-center mb-3">
                <span class="titleServicesB" style="color:red;">NO</span>
                <span class="titleServicesB">Prometemos</span>
            </div>
            <div class="d-flex justify-content-center align-items-center p-3">
                <div class="circle-icon">
                    <i class="fa-solid fa-ban" style="font-size: 25px; color:#FFFFFF"></i>
                </div>
            </div>
            <p class="servicesTextB p-3 lh-lg" style="text-align: justify;">Objetivos inalcanzables, ventas en el primer
                día y resultados inmediatos.</p>
        </div>

        <div class="col-md-4 mx-auto" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
            <div class="text-center mb-3">
                <span class="titleServicesB" style="color:red;">NO</span>
                <span class="titleServicesB">Trabajamos</span>
            </div>
            <div class="d-flex justify-content-center align-items-center p-3">
                <div class="circle-icon">
                    <i class="fa-solid fa-thumbs-down" style="font-size: 25px; color:#FFFFFF"></i>
                </div>
            </div>
            <p class="servicesTextB p-3 lh-lg" style="text-align: justify;">Cubriendo bomberazos o aplicando malas
                prácticas profesionales.
            </p>
        </div>
    </div>
</div>


<style>
    .jumbotron {
        background-color: #141A43;
        width: 100%;
        border-radius: 1%;
    }
</style>

<!-- Historia -->

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="mt-5 rounded  mb-5">
            <div class="w-100">
                <div class="row d-flex justify-content-center align-items-center">
                    <!--imagen-->
                    <div class=" col-md-5">
                        <img src="./IMG/fondo1.jpg" alt="..." class="img-fluid w-100 p-4" style="font-size: 20px;">
                    </div>
                    <!--texto-->
                    <div class="col-md-7">
                        <div class="text-center">
                            <h2 class="titleHisotry mt-3">Historia</h2>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center p-3 text-center">
                            <div class="col-xs-12 col-md-12">
                                <p class="historyText lh-lg" style="text-align: justify;"><strong
                                        class="historyText1">Desde el
                                        2018</strong> nuestro objetivo es ser un aliado estratégico para las pequeñas y
                                    medianas empresas
                                    de México en pro de su crecimiento, ya que este sector empresarial se enfrenta a
                                    muchas
                                    carencias, conflictos, falta de recursos y soluciones clave que impulsen a su
                                    desarrollo, es por ello que en un entorno de colaboración trabajamos con el mismo
                                    objetivo de <strong class="historyText1">alcanzar sus metas y objetivos.</strong>
                                </p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div>
    <h2 class="titleHistory mb-5" style="text-transform:capitalize;" data-aos="flip-left"
        data-aos-easing="ease-out-cubic" data-aos-duration="2000">Nuestra familia</h2>
</div>
@php
    $url = route('familias.familiasget');
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    $i = 0;
@endphp
<div id="carouselExampleCaptions" class="carousel slide w-100" data-bs-ride="carousel" data-interval="2000">

    <!--indicadores-->
    <div class="carousel-indicators">
        @foreach ($data as $index => $item)
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $index }}"
                class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>

    <!--imagenes-->
    <div class="carousel-inner">
        @foreach ($data as $index => $item)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }} d-item">
                <img src="{{ asset($item['img']) }}" class="d-block w-100 d-img" alt="slider {{ $index + 1 }}">
            </div>
        @endforeach
    </div>
    <!--boton atras-->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <!--boton adelante-->
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!--mision, vision, valores-->
<div class="container p-5">
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card card1 card-1 h-100 d-flex">
                <h3 class="mvv text-center p-3">Misión</h3>
                <p class="textmvv">Apoyar el desarrollo integral para evitar el estancamiento de las pequeñas y
                    medianas empresas, de
                    una manera eficaz y confiable que su vez genere un servicio de calidad.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card1 card-2 h-100 d-flex">
                <h3 class="mvv text-center p-3">Visión</h3>
                <p class="textmvv">Posicionarnos como un grupo empresarial de prestigio a nivel nacional con un modelo
                    de negocios
                    estructurado, adaptable y expandible.</p>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card card1 card-3 h-100 d-flex">
                <h3 class="mvv text-center p-3">Valores</h3>
                <ul>
                    <li class="textmvv">Confianza</li>
                    <li class="textmvv">Trabajo en equipo</li>
                    <li class="textmvv">Compromiso</li>
                    <li class="textmvv">Lealtad</li>
                    <li class="textmvv">Proactividad</li>
                </ul>

            </div>
        </div>
    </div>
</div>


<style>
    .mvv {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: normal;
    }

    .textmvv {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: normal;
    }
</style>

<!--nuestros clientes-->

<div class="d-flex text-center">
    <div class=" w-100">
        <div class=" mt-4">
            <h3 class="titleHistory" style="text-transform:capitalize;">Nuestros clientes</h3>
        </div>
    </div>
</div>

<!--efceto-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!--Animaciones-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true
    });
</script>

<style>
    .btn:hover {
        color: #FFFFFF;
        background-color: #dd801f;
    }

    .servicesTextB {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: normal;
    }

    .titleHistory {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: bold;
        /*color: #597FAB; */
        text-align: center;

    }

    .historyText {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
        color: #FFFFFF;
    }

    .historyText1 {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: bold;
        color: #FFFFFF;
    }

    .titleServicesB {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: bold;
    }

    .titleServicesT {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: normal;
    }



    .mvnv {
        font-family: 'Poppins', sans-serif;
        font-size: 25px;
        font-weight: bold;
    }

    .mvnvT {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: normal;
    }

    .titleHisotry {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: bold;
        color: #FFFFFF;
    }

    .textHisotry {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
    }

    .first-word {
        margin-left: 2em;
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: normal;
    }

    /* iconos encerrados */
    .circle-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #3C426F;
    }

    /* efecto type */
    .effecttype {
        font-family: 'Poppins', sans-serif;
        text-align: center;
        font-size: 35px;
        font-weight: 600;
        border:none;
        margin-left: 50px auto;
        animation: teclear 2s steps(60), efecto .5s;
    }

    @keyframes teclear {
        from {
            clip-path: polygon(0 0, 0 0, 0 100%, 0% 100%);
        }

        to {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }
    }

    @keyframes efecto {
        50% {
            border-color: transparent;
        }
    }


    /*3 cards - mision vision y valores */

    .card1 {
        border-radius: 4px;
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        padding: 14px 80px 18px 36px;
        cursor: pointer;
        height: 100%;
    }

    .card1:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
        cursor: auto;
    }

    .card1 h3 {
        font-weight: 600;
    }

    .card1 .imagen {
        position: absolute;
        top: 20px;
        right: 15px;
        max-height: 120px;
    }

    .card-1 {
        background-image: url(https://ionicframework.com/img/getting-started/ionic-native-card.png);
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    .card-2 {
        background-image: url(https://ionicframework.com/img/getting-started/components-card.png);
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    .card-3 {
        background-image: url(https://ionicframework.com/img/getting-started/theming-card.png);
        background-repeat: no-repeat;
        background-position: right;
        background-size: 80px;
    }

    @media(max-width: 990px) {
        .card1 {
            margin: 20px;
        }
    }
</style>


<div class="row justify-content-center">

    @php
        $url = route('cards.indexG','Clientes');
        $json = file_get_contents($url);
        $data = json_decode($json, true);
    @endphp
    @if (!empty($data))
    @foreach ($data as $item)
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset($item['img']) }}" class="img-fluid rounded-star w-100t"
                        alt="{{ asset($item['img']) }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body w-100">
                        <h5 class="card-title">{{ $item['titulo'] }}</h5>
                        <p class="card-text">{{ $item['descripcion'] }}</p>
                        <a href="{{ $item['link'] }}" class="btn btn-primary">Conocela</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif
</div>
