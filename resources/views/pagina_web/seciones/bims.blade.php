<!--portada-->
<div class="w-100">
    <img src="IMG/BIMER-ECT.jpg" id="BimImg" class="BimImg" style="width:100%;
    height:auto;">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 mx-auto p-3">
            <h4 class="textPrincipal p-3 lh-base" style="text-align: center;">Nuestros servicios se ajustan a las
                necesidades de nuestros clientes, es por ello que
                aunque contamos con
                paquetes para algunos de nuestros servicios, <b class="textPrincipal">siempre podremos crear un <br>
                    traje a tu medida.</b>
            </h4>
        </div>
    </div>
</div>


<div class="alert alert-primary w-100 text-center mb-5 fs-2 fw-bold" role="alert">
    ¿Qué ofrecemos?
</div>

<!--CARDS -->

<div class="container">
    <div class="row mx-4">
        @php
            $url = route('cards.indexG', 'CardsBIMStudio');
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
        <style>
            .myLinkButton:hover {
                color: #000000 !important;
                background-color: #ffffff !important;
            }
        </style>

    </div>

</div>


<style>
    .alert {
        color: #5C8AB4;
    }

    .text-card-title {
        font-family: 'Poppins', initial;
        font-size: 32px;
        font-weight: bold;
        color: #FFFFFF;
    }

    .card-footer1 {
        position: absolute;
        bottom: 0;
        width: 100%;
        border: none;

    }

    .carddivqh {
        transition: background-color .3s;
        position: relative;
    }

    .carddivqh:hover {
        transform: translateY(-12px);
        cursor: default;
    }

    .card-text {
        font-family: 'Poppins', sans-serif;
        font-weight: normal;
        font-size: 18px;
        text-align: justify
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

    .textPrincipal {
        font-family: 'Poppins', sans-serif;
        font-weight: bolder;
        font-size: 24px;
        font-style: italic;

    }
</style>
