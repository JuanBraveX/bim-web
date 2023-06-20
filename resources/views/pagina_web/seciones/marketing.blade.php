<div class="w-100">
    <img src="IMG/BIMER-ECT.jpg" id="BimImg" class="BimImg" style="width:100%;
    height:auto;">
</div>

<!--Información de contacto-->
<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex align-items-center text-center text-center">
            <div class="col-md-12">
                <div class="container">
                    <div class="row justify-content-center">
                    
                        <div class="col-md-12 p-5">
                                <h1 class="fraseMk">Explora nuevas formas de hacer <span class="fraseMk" style="color: green"> marketing </span> desde una perspectiva <span class="fraseMk" style="color: red"> diferente.</span></h1>
                        </div>

<div class="container">
    <div class="row">
        <div class="col-md-3 mx-auto">
            <div class="text-center mb-3">
               <!--  <span class="titleServicesB" style="color:red;">NO</span> -->
                <span class="titleServicesB">Publicita tu marca</span>
            </div>
            <div class="d-flex justify-content-center align-items-center p-3">
                <div class="circle-icon">
                    <i class="fa-solid fa-bullhorn" style="font-size: 25px; color:#FFFFFF"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3 mx-auto">
            <div class="text-center mb-3">
               <!--  <span class="titleServicesB" style="color:red;">NO</span> -->
                <span class="titleServicesB">Servicios</span>
            </div>
            <div class="d-flex justify-content-center align-items-center p-3">
                <div class="circle-icon">
                    <i class="fa-solid fa-bell-concierge" style="font-size: 25px; color:#FFFFFF"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3 mx-auto">
            <div class="text-center mb-3">
               <!--  <span class="titleServicesB" style="color:red;">NO</span> -->
                <span class="titleServicesB">Beneficios</span>
            </div>
            <div class="d-flex justify-content-center align-items-center p-3">
                <div class="circle-icon">
                    <i class="fa-solid fa-bell-concierge" style="font-size: 25px; color:#FFFFFF"></i>
                </div>
            </div>
        </div>

        <div class="col-md-3 mx-auto">
            <div class="text-center mb-3">
               <!--  <span class="titleServicesB" style="color:red;">NO</span> -->
            <span class="titleServicesB">Contacto</span>         
            </div>
            <div class="d-flex justify-content-center align-items-center p-3">
                <div class="circle-icon">
                     <a href="contacto.php" class="text-decoration-none">
                    <i class="fa-solid fa-address-book" style="font-size: 25px; color:#FFFFFF"></i>
                     </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jumbotron -->
<div class="jumbotron mt-5 p-3 text-white rounded">
  <h4 class="fraseMktextP lh-base fw-norma">"En marketing, el objetivo principal no es solo vender un producto, sino crear y mantener una relación significativa con los clientes a través de experiencias de marca memorables que satisfagan sus necesidades y superen sus expectativas".</h4>
  <h4 class="autor">~ Business in Motion</h4>
</div>

<div class="w-100 p-3">
    <div class="text-center w-100 d-flex justify-content-center align-items-center flex-column">
        <p class="fraseMktext col-md-10 p-3 lh-lg">Nuestro equipo está formado por expertos en diversas áreas, quienes
            trabajan en conjunto para proporcionarte soluciones personalizadas que se adapten a tus necesidades
            específicas. Nos tomamos el tiempo para escucharte y entender tus objetivos, para poder ofrecerles
            soluciones efectivas a través de una metodología única, desarrollada e implementada para garantizar un
            enfoque estratégico de posicionamiento orgánico.</p>
    </div>
</div>


<!--cards-->
<div class="container">
    <div class="row">
        @php
            $url = route('cards.indexG', 'CardsMarketing');
            $json = file_get_contents($url);
            $data = json_decode($json, true);
        @endphp
        
            @foreach ($data as $item)
                <div class="col-md-4" data-aos="zoom-in-down" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <div class="cardServices card card-inverse text-center shadow" style="height: 100%;">

                        <div class="card-body">
                            <img src="{{ asset($item['img']) }}" class="card-img-top mb-3" alt="...">

                            <h5 class="serviceTitle mb-3">{{ $item['titulo'] }}</h5>
                            <p class="serviceText card-text" style="text-align: justify;">{{ $item['descripcion'] }}
                            </p>
                            <div class="w-100 d-flex align-items-center justify-content-center p-2">
                                <a href="{{ $item['link'] }}" class="btn btn-primary rounded-pill">Leer mas <i
                                        class="fa fa-chevron-right" style="font-size: 20px;" aria-hidden="true"></i></a>
                                </a>
                            </div>


                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</div>

<!--sección video y bimo-->

<div class="container">
    <hr>
    <h2 class="titleWhy text-center mt-5 mb-5 lh-base" id="servicios">¿Por qué es tan importante <br> que tu empresa
        esté en linea?</h2>
</div>

<div class="w-50 h-50 ratio ratio-16x9 mb-5 ml-3 mr-3">
    <iframe src="https://www.youtube.com/embed/5NfBC3f_llU" title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
</div>

<!--bimo-->
<div class="card d-flex justify-content-center align-items-center">
    <h5 class="titleBimo mt-3 " style="text-transform: uppercase;">Y tú...</h5>
    <h6 class="titleBimo2 mt-3 text-center lh-base" style="text-transform: uppercase;"> ¿Estás aprovechando el <br>
        mundo digital al máximo para el <br> posicionamiento de tu empresa o negocio?</h6>

    <div class="container">
        <div class="row justify-content-center">
            <img src="IMG/Bimo.png" class="bimoSaludando">
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>


<!--Animaciones-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true
    });
</script>

<!--estilos de fuentes-->
<style>
    .jumbotron {
        background-color: #141A43;
        width: 100%;
        border-radius: 1%;
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
    .titleServicesB {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: bold;
    }
    .bimoSaludando {
        width: 400px;
        height: 400px;
    }

    .btn:hover {
        color: #141A43;
        background-color: #FFFFFF;
    }

    .btn {
        transition: background-color .5s;
        background-color: #141A43;
        font-size: 25px;
        font-weight: normal;

    }


    .fraseMk {
        font-family: 'Poppins', sans-serif;
        font-size: 45px;
        font-weight: bold;
    }

    .jumbotron {
        background-color: #141A43;
        width: 100%;
        border-radius: 1%;
        color: #fff;
        
    }

    .fraseMktextP {
        font-family: 'Poppins', sans-serif;
        font-size: 23px;
        font-weight: normal;
        text-align: center;
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .autor {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
        text-align: right;
        margin-top: 10px;
        font-style: italic;
     
    }

    .fraseMktext {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: normal;
        text-align: justify;
    }

    .serviceTitle {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: bold;
    }

    .serviceText {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: normal;
    }

    .titleWhy {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: bold;
    }

    .titleBimo {
        font-family: 'Poppins', sans-serif;
        font-size: 26px;
        font-weight: bold;
        color: orange;
    }

    .titleBimo2 {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: bold;
        color: #141A43;
    }

    .textContact {
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: 500;
        color: #597FAB;
    }

    .textBtnContact {
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: 500;

    }

    .botonContacto {
        transition: background-color .5s;
        background-color: #529BDF;
        font-size: 25px;
        font-weight: normal;
    }

    .btngoempleate {
        font-family: 'Poppins', sans-serif;
        font-size: 36px;
        font-weight: 500;
    }

    .text-icons-start {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
        font-weight: bold;
        color: #000;
        margin-top: 10px;
    }

    .cardServices:hover {
        background-color: #141A43;
        color: #FFFFFF;
        transform: translateY(-15px);
    }
</style>
</div>
</div>
</div>
