<div class="w-100">
    <img src="IMG/BIMER-ECT.jpg" id="BimImg" class="BimImg" style="width:100%;
    height:auto;">
</div>

<div class="col-md-12 mb-3 mt-4 text-center">
    <h1 class="textInicial lh-base">Servicios de consultoría especializadas para atender áreas de <br> mejora en
        Administración, Recursos Humanos, Financiamiento, <br> Fiscal y Contable.
    </h1>
</div>

<!--Por qué elegirnos-->
<div class="container">
    <div class="row">
        <!--POR QUÉ ELEGIRNOS-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 d-flex align-items-center p-3">
                    <img src="IMG/Consultoria/600x600.png" class="imgxqelegirnos img-fluid mx-auto d-block">
                </div>
                <div class="col-md-6 text-center align-self-center">
                    <h2 class="titleWhyE mb-5" style="text-transform: uppercase;">¿Por qué elegirnos?</h2>
                    <h4 class="textWhyE lh-lg">Somos una empresa comprometida contigo y tu negocio. Contamos con más de
                        15 años de experiencia en asesoramiento y gestión empresarial para obtener <strong> excelentes
                            resultados.</strong></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Titulo-->

<div class="container" style="margin-top: 24px;">
    <hr style="height: 5px; color: blue; background-color: blue; border: none;">
    <div class="row">
        @php
            $url = route('cards.indexG', 'CardsBIMAnalytics');
            $json = file_get_contents($url);
            $data = json_decode($json, true);
        @endphp
        @if (!empty($data))
            @foreach ($data as $item)
                <div class="col-md-6 mb-5">
                    <div class="card h-100 shadow">
                        <div class="position-relative">
                            <img src="{{ asset($item['img']) }}" class="card-img-top" alt="Image 2">
                            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center text-center"
                                style="background-color: #141a4396;">
                                <h5 class="card-title text-white card-title p-1">{{ $item['titulo'] }}</h5>
                            </div>
                        </div>
                        <div class="card-body d-flex p-5">
                            <p class="card-text align-items-center justify-content-center mb-1">
                                {{ $item['descripcion'] }}</p>
                        </div>
                        <div class="card-footer text-center border-0 bg-white pb-3">
                            <a class="btn btn-primary myLinkButton" href="{{ $item['link'] }}">Leer más
                                <i class="fa fa-chevron-right" style="font-size: 20px;" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
<hr>


<div class="text-center">

    <h4 class="youwantcontact mb-3" style="text-transform:uppercase;">¿Deseas que te contactémos?</h4>
</div>

<!-- Botones -->
<div class="w-100 d-flex align-items-center justify-content-center mb-5">
    <div class="m-2">
        <a href="contacto.php" class="text-decoration-none">
            <button type="button"
                class="btn btn-primary btn-block btn-lg mb-4 d-flex align-items-center justify-content-center">
                <span class="btngoempleate">Contacto</span>
                <i class="fa-solid fa-address-book ms-2" style="font-size: 20px;"></i>
            </button>
        </a>
    </div>
    <div class="m-2">
        <a href="empleate.php" class="text-decoration-none ">
            <button type="button"
                class="btn btn-primary btn-block btn-lg mb-4 d-flex align-items-center justify-content-center">
                <span class="btngoempleate">Empléate</span>
                <i class="fa-solid fa-briefcase ms-2" style="font-size: 20px;"></i>
            </button>
        </a>
    </div>
</div>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 2000,
        once: true
    });
</script>

<!--estilos de fuenets-->
<style>
    .btn:hover {
        color: #141A43;
        background-color: #FFFFFF;
        transform: translateY(-2px);
    }

    .btn {
        transition: background-color .5s;
        background-color: #141A43;
    }

    .textInicial {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: normal;

    }

    .titleWhyE {
        font-family: 'Poppins', sans-serif;
        font-size: 28px;
        font-weight: 500;
    }

    .textWhyE {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
    }

    .NareasText {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: bold;
    }

    .titleservice {
        font-family: 'Poppins', sans-serif;
        font-size: 50px;
        font-weight: 500;
    }

    .card-text {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
        text-align: justify;
    }

    .leermasbtn {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
    }

    .knowyou {
        font-family: 'Poppins', sans-serif;
        font-size: 39px;
        font-weight: bold;
    }

    .knowyouText {
        font-family: 'Poppins', sans-serif;
        font-size: 21px;
        font-weight: 500;
    }

    .youwantcontact {
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: normal;
    }

    .btngoempleate {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
    }
</style>
