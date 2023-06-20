<!--imagen de portada-->
<div class="w-100">
    <img src="IMG/Div_Imagen.jpg" id="BimImg" class="BimImg" style="width:100%;
    height:auto;">
</div>

<div class="ldn text-center p-3 mt-5" data-aos="zoom-in-up" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
    Líneas de negocio
</div>


<!--Consultoria, Importancia e Impacto y efecto de las cards-->
<style>
    .ldn {
        font-family: 'Poppins', sans-serif;
        font-size: 42px;
        font-weight: bold;
        color: #597FAB;
        text-transform: uppercase;

    }

    .card-img-top {
        object-fit: cover;
        height: 200px;
        /* Ajusta la altura deseada */
    }

    /*color de contenedor de publicaciones */
    .carddivqh {
        transition: background-color .3s;
        position: relative;

    }

    .carddivqh:hover {
        color: #141A43;
        background-color: #FFFFFF;
        transform: translateY(-12px);
    }

    .card-footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        border: none;

    }

    .btnleerMass {
        transition: background-color .5s;
        background-color: #141A43;
        font-family: 'Poppins', initial;
        font-size: 25px;
        font-weight: normal;
        text-align: center;
        justify-content: center;
        border-radius: 10px;

    }

    .btnleerMass:hover {
        color: #141A43;
        background-color: #FFFFFF;
    }
</style>

<div class="container my-5">
    <div class="row">
        @php
            $url = route('cards.indexG', 'CardsLineasNegocio');
            $json = file_get_contents($url);
            $data = json_decode($json, true);
            $count = 0;
        @endphp

        @foreach ($data as $item)
            <div class="col-md-4" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                <div class=" card h-100 shadow carddivqh">
                    <div class="position-relative">
                        <img src="{{ asset($item['img']) }}" class="card-img-top" alt="Image 2">
                        <div class="position-absolute top-50 start-50 translate-middle text-center">
                            <h5 class="card-title text-card-title">{{ $item['titulo'] }}</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text lh-base fw-normal textocards mb-5">{{ $item['descripcion'] }}</p>

                        <div class="card-footer text-center" style="background-color: #FFFFFF";>
                            <a href="{{ $item['link'] }}" class="btn btn-primary btnleerMass">Leer más
                                <i class="fa fa-chevron-right" style="font-size: 20px;" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @php 
            $count++ 
            @endphp
            @if ($count == 1)
                <div class="col-md-4" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                    <img src="IMG/Bimo_1.jpg" style="width: 100%;" alt="" srcset="">
                </div>
            @endif
        @endforeach
<!--
        <div class="col-md-4" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="500">
            <div class=" card h-100 shadow carddivqh">
                <div class="position-relative">
                    <img src="IMG/2_xqelegirnos.png" class="card-img-top" alt="Image 2">
                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                        <h5 class="card-title text-card-title">Desarrollo Tecnológico</h5>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text lh-base fw-normal textocards mb-5">Agencia Digital especializada en
                        servicios de
                        marketing, producción videográfica y desarrollo tecnológico, soluciones que ayudan a los
                        empresarios a dirigir sus empresas al mundo digital.</p>

                    <div class="card-footer text-center" style="background-color: #FFFFFF";>
                        <button class="btn btn-primary btnleerMass">Leer más
                            <i class="fa fa-chevron-right" style="font-size: 20px;" aria-hidden="true"></i>

                        </button>
                    </div>
                </div>
                <!--
      <div class="w-100 d-flex align-items-center justify-content-center p-2">
                <a href="BIMS.php" class="btn btn-primary rounded-pill">Leer mas <i class="fa fa-chevron-right"
                        style="font-size: 20px;" aria-hidden="true"></i></a>
                </a>
            </div> 

            </div>
        </div>

        <div class="col-md-4" data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="500">
            <img src="IMG/Bimo_1.jpg" style="width: 100%;" alt="" srcset="">
        </div>


        <div class="col-md-4" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="500">
            <div class=" card h-100 shadow carddivqh">
                <div class="position-relative">
                    <img src="IMG/2_xqelegirnos.png" class="card-img-top" alt="Image 2">
                    <div class="position-absolute top-50 start-50 translate-middle text-center">
                        <h5 class="card-title text-card-title">Consultoría Empresarial</h5>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text lh-base fw-normal textocards mb-5">La consultoría empresarial es un
                        servicio
                        profesional que brinda asesoramiento y apoyo a las organizaciones con el objetivo de
                        mejorar su
                        desempeño y lograr sus metas y objetivos estratégicos. </p>
                     <div class="card-footer text-center" style="background-color: #FFFFFF";>
         <button class="btn btn-primary btnleerMass">Leer más</button>
         </div>

                    <div class="card-footer text-center" style="background-color: #FFFFFF";>
                        <button class="btn btn-primary btnleerMass">Leer más
                            <i class="fa fa-chevron-right" style="font-size: 20px;" aria-hidden="true"></i>

                        </button>
                    </div>

                </div>
            </div>
        </div>-->
    </div>
</div>


<!--carrusel-->
@php
    $url = route('cards.indexG', 'CarruselInicio');
    $json = file_get_contents($url);
    $data = json_decode($json, true);
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
                <div class="carousel-caption top-0 mt-5">
                    <h5 class="mt-5 fs-3 display-1 fw-bolder text-capitalize">{{ $item['titulo'] }}</h5>
                    <p>{{ $item['descripcion'] }}</p>
                    <a href="{{ $item['link'] }}"><button
                            class="btn btn-primary px-4 py-2 fs-5 mt-5">Información</button></a>
                </div>
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

<style>
    .businesslines {
        font-family: 'Poppins', initial;
        font-size: 32px;
        font-weight: bold;
        color: #000;
    }

    .fas {
        margin-left: 10px;
    }

    /*tarjeta 1*/
    .card-header-first {
        margin-top: -40px;
        height: 120px;
        background: linear-gradient(-90deg, #BF019F, #F28A57);
        box-shadow: 1px 5px 15px #a2a2a2;
    }

    /*tarjeta 2*/
    .card-header-second {
        box-shadow: 1px 7px 15px #a2a2a2;
        margin: -25px -25px 0px -25px;
        height: 120px;
        background: linear-gradient(-90deg, #8E2DE2, #4A00E0);
    }

    /*tarjeta 3*/
    .card-header-third {
        margin-top: -40px;
        height: 120px;
        background: linear-gradient(-90deg, #11998e, #38ef7d);
        box-shadow: 1px 5px 15px #a2a2a2;
    }


    .card-section-third span i {
        padding: 17px;
        margin: 0px 10px;
        color: #fff;
        height: 50px;
        width: 50px;
        box-shadow: 1px 6px 24px #d2d2d2;
        background: linear-gradient(-90deg, #11998e, #38ef7d);
    }

    .card-header-third span i:hover,
    .card-section-third span i:hover {
        box-shadow: 1px 1px 15px #000;
    }

    /*efecto shadows para todas las tarjetas*/
    .card-section {
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, .16), 0 2px 10px 0 rgba(0, 0, 0, .12);
    }

    /*Para el efecto sombra al pasar por encima el mouse*/
    .card-section:hover {
        box-shadow: 1px 1px 20px #d2d2d2;
    }

    .text-card-title {
        font-family: 'Poppins', initial;
        font-size: 32px;
        font-weight: bold;
        color: #FFFFFF;
    }

    .textocards {
        font-family: 'Poppins', initial;
        font-size: 18px;
        font-weight: normal;
        text-align: justify;
    }
</style>

<!--Animaciones-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true
    });
</script>
