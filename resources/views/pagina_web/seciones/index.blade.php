
@php
    $url = route('cards.indexG', 'CarruselInicio');
    $json = file_get_contents($url);
    $data = json_decode($json, true);
@endphp

<div id="carouselExampleCaptions" class="carousel slide w-100" style="height: 20rem;" data-bs-ride="carousel" data-interval="2000">

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
                <img src="{{ asset($item['img']) }}" class="d-block w-100 object-fit-cover h-100" alt="slider {{ $index + 1 }}">
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
    .carousel-item {
        height: 65vh;
        min-height: 300px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>


<!--POR QUÉ ELEGIRNOS-->
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-5 p-3">
            <img src="IMG/2_xqelegirnos.png" alt="imagenxq" class="w-100 rounded">
        </div>
        <div class="col-md-6">
            <div class="text-center">
                <h2 class="fontTitle p-4">¿Por qué elegirnos?</h2>
            </div>
            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                <h5 class="fontText lh-lg" style="text-align: justify;">Somos una empresa comprometida
                                contigo y tu negocio. Contamos con más de 5 años
                                de experiencia en asesorar a las pequeñas y medianas empresas para obtener buenos
                                resultados.</h5>
                <h5 class="fontText lh-lg mb-5" style="text-align: justify;">Nos entusiasma poder trabajar
                                para tí, el poder brindarte las mejores herramientas tecnológicas que necesitas para
                                hacer crecer tu negocio como realmente lo merece.</h5>
            </div>
        </div>
    </div>
</div>

<div class="btngoempleate1 p-3 w-100 text-center text-white" style="background-color: #141A43">Ponte en contacto con
    uno de nuestros profesionales
    <button type="button" class="btnContact btn btn-dark mx-3">
        <span class="btngoempleate1">Contacto</span>
        <i class="fa-solid fa-address-book" style="font-size: 25px;"></i>
    </button>
</div>

<!--Consultoria, Importancia e Impacto-->
<style>
    .card-img-top {
        object-fit: cover;
        height: 200px;
        /* Ajusta la altura deseada */
    }
</style>

<div class="row justify-content-center mb-5 mt-5 w-100">
    
        @php
            $url = route('cards.indexG', 'CardsInicio');
            $json = file_get_contents($url);
            $data = json_decode($json, true);
        @endphp
        @foreach ($data as $item)
            <div class="col-md-4 m-3" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                data-aos-duration="2000">
                <div class="card h-100 w-100 border border-primary shadow carddivarriba">
                    <div class="position-relative">
                        <img src="{{ asset($item['img']) }}" class="card-img-top" alt="Image 2">
                        <div class="position-absolute top-50 start-50 translate-middle text-center">
                            <h5 class="card-title text-card-title ">{{ $item['titulo'] }}</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text lh-base fw-normal">{{ $item['descripcion'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    
</div>

<!--Texto Publicaciones más Recientes -->

<div class="row mb-5">
    <div class="col-md-12">
        <h3 class="postRecent text-center">¡Publicaciones más Recientes!</h3>
    </div>
</div>

<!--Cabeceras de Publicaciones -->

    <!--Publicaciones-->
    <div class="row justify-content-center mb-5 w-100">

        <!--Facebook -->
        <div class="col-md-4 mb-3">
            <div class="carddiv card h-100 border border-primary">
                <div class="card-body">
                    <!--código incrustado de la publicación-->
                    <iframe class="w-100 h-100"
                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fbusinessinmotionstudio%2Fposts%2Fpfbid0GfLurcy9R6jnMPrNh7aUrCx9fsC3ha3aiT8sMSTWCfia5NyjHqKcxTJ5512Gh44kl&show_text=true&width=500"
                        width="500" height="680" style="border:none;overflow:hidden" scrolling="no"
                        frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
            </div>
        </div>

        <!--Twitter-->
        <div class="col-md-4 mb-3">
            <div class="carddiv card h-100 border border-primary">
                <div class="card-body">
                    <!--post code-->
                    <blockquote class="twitter-tweet w-100 h-100">
                        <p lang="es" dir="ltr">¿ Has pensado en las fallas que puede haber con la publicidad
                            tradicional y las ventajas que habría para ti utilizando marketing de contenido en tu
                            empresa? 🤩 <a href="https://t.co/C6lEp1so0N">pic.twitter.com/C6lEp1so0N</a></p>&mdash;
                        Business in Motion (@binmotionmx) <a
                            href="https://twitter.com/binmotionmx/status/1651782430540419072?ref_src=twsrc%5Etfw">April
                            28, 2023</a>
                    </blockquote>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>

        <!--Linkedin-->
        <div class="col-md-4 mb-3">
            <div class="card h-100 border border-primary carddiv">
                <div class="card-body">
                    <!--post code-->
                    <iframe src="https://www.linkedin.com/embed/feed/update/urn:li:ugcPost:6942958567658311680"
                        class="w-100 h-100" frameborder="0" allowfullscreen=""
                        title="Publicación integrada"></iframe>
                </div>
            </div>
        </div>
</div>

<!--Animaciones en secciones-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true
    });
</script>

<!--estilo de tipografia y botones-->

<style>
    .btnContact {
        transition: background-color .5s;
        background-color: #ffffff;
        font-family: 'Poppins', sans-serif;
        font-size: 25px;
        font-weight: normal;
        color: #000;
    }

    .btnContact:hover {
        color: #ffffff;
        background-color: #3C426F;
    }

    /*color de contenedor de publicaciones */
    .carddiv {
        transition: background-color .3s;

    }

    .carddiv:hover {
        color: #141A43;
        background-color: #FFFFFF;
        transform: translateY(-12px);
    }

    .carddivarriba {
        transition: background-color .3s;
        width: 337px;
    }

    .carddivarriba:hover {
        color: #141A43;
        background-color: #FFFFFF;
        transform: translateY(-12px);

    }

    .text-card-title {
        font-family: 'Poppins', sans-serif;
        font-size: 32px;
        font-weight: bold;
        text-align: center;
    }

    .fas {
        margin-left: 10px;
    }

    .fontTitle {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 28px;
        text-align: center;

    }

    .fontText {
        font-family: 'Poppins', sans-serif;
        font-weight: normal;
        font-size: 18px;
        text-align: justify;
    }

    .textContact {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 28px;
        color: #597FAB;
        text-transform: uppercase;
    }

    .card-text {
        font-family: 'Poppins', sans-serif;
        font-weight: 500;
        font-size: 16px;
        text-align: justify
    }


    .btngoempleate1 {
        font-family: 'Poppins', sans-serif;
        font-weight: auto;
        font-size: 20px;
        text-transform: uppercase;

    }

    .botonContacto {
        color: #597FAB;
    }

    .postRecent {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 46px;
        color: #597FAB;
    }

    .imgxqelegirnos {
        width: 350px;
        height: 350px;
    }

    .titlemvv {
        font-family: 'Poppins', sans-serif;
        font-size: 20px;
    }

    .imgelegirnos {
        width: 400px;
        height: 350px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
        margin-bottom: 20px;
        margin-top: 20px;
        border-radius: 10%;
    }
</style>
