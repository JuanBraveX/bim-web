<!--portada-->
<div class="w-100">
    <img src="IMG/BIMER-ECT.jpg" id="BimImg" class="BimImg" style="width:100%;
    height:auto;">
</div>
<div class="text-center mt-4 mb-4">
    <div class="text-center w-100 d-md-block">
        <h3 class="titlemainIC">Innovación Y Creatividad En Constante Movimiento</h3>
    </div>
</div>


<!--3 columnas (Bullets)-->
  <div class="row d-flex justify-content-center align-items-center p-3 text-center">
    <div class="container mb-3">
        <div class="row justify-content-center">
            @php
                $url = route('cards.indexG', 'CardsQueofrecemos');
                $json = file_get_contents($url);
                $data = json_decode($json, true);
            @endphp
            @if (!empty($data))
                @foreach ($data as $item)
                    <div class="col-sm-3">
                        <h4 class="bulletsTitle">{{ $item['titulo'] }}</h4><br>
                        <p class="bullets" style="text-align: justify;">{{ $item['descripcion'] }}</p>
                    </div>
                @endforeach
            @endif
        </div>
    </div>


<div class="linea"></div>

    <!--Nuestros servicios-->
    <div>
        <div class="w-100">
            <div class=" mb-3">
                <h2 class="ourservices"> Nuestros Servicios</h2>
            </div>
        </div>
    </div>

    <!--Contenido Principal-->

  <div class="container">
    <div class="row justify-content-around">
        @php
            $url = route('cards.indexG', 'CardsNuestrosServicios');
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
                                <h5 class="card-title text-card-title p-1 text-white">{{ $item['titulo'] }}</h5>
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
 

    
<!--Animaciones-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true
    });
</script>

    <!--estilo de fuentes-->
    <style>

       .titleServicesB {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: bold;
    }
    .servicesTextB {
        font-family: 'Poppins', sans-serif;
        font-size: 18px;
        font-weight: normal;
        text-align: center;
    }
    .circle-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #3C426F;
    }
        .btn:hover {
            color: #141A43;
            background-color: #FFFFFF;
        }

        .btn {
            transition: background-color .5s;
            background-color: #141A43;
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
            font-weight: normal;

        }

        .titlemainIC {
            color: #597FAB;
            font-family: 'Poppins', sans-serif;
            font-size: 36px;
            font-weight: bold;
        }

        .bulletsTitle {
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
            font-weight: bold;
        }

        .bullets {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: normal;
        }

        .ourservices {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: 500;
            color: #597FAB;
        }

        .textmainServices {
            font-family: 'Poppins', sans-serif;
            font-size: 50px;
            font-weight: 500;
        }

        .textCardQS {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: normal;
        }
         .linea {
            border-top: 2px solid #000; /* Define un borde superior sólido de 1 píxel */
            width: 100%; /* Ajusta el ancho de la línea al 100% del contenedor */
            margin-top: 10px; /* Margen superior para separar la línea del contenido anterior */
            margin-bottom: 10px; /* Margen inferior para separar la línea del contenido posterior */
            /* Cambia el color del borde a rojo */
            border-color: #597FAB;
        }
        .ourservices {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: bold;
            color: #597FAB;
        }
    </style>

</div>
