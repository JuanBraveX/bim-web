<footer class="text-center text-white" style="background-color: #141A43;">
    <div class="container p-3">
        <div class="row">
            @php
                    $url = route('bimsdatos.bimsdatosget');
                    $json = file_get_contents($url);
                    $data = json_decode($json, true);
                @endphp
                @if (!empty($data))
                    @foreach ($data as $item)
                    @if($item['id']===1)
            <div class="col-md-4">
                
                <div class="icons">
                    <!-- Facebook -->
                    <a class="rrssbtn btn btn-link btn-lg text-white m-1" href="{{ $item['red1'] }}"
                        target="_blank" role="button" data-mdb-ripple-color="dark">
                        <i class="bi bi-facebook" style="font-size: 35px;"></i></a>

                    <!-- Twitter -->
                    <a class="rrssbtn btn btn-link btn-lg text-white m-1" href="{{ $item['red2'] }}"
                        target="_blank" role="button" data-mdb-ripple-color="dark">
                        <i class="bi bi-twitter" style="font-size: 35px;"></i></a>

                    <!-- Linkedin -->
                    <a class="rrssbtn btn btn-link btn-lg text-white m-1"
                        href="{{ $item['red3'] }}" target="_blank"
                        role="button" data-mdb-ripple-color="dark">
                        <i class="fa-brands fa-linkedin-in" style="font-size: 35px;"></i>
                        <!-- Whatsapp -->
                        <a class="rrssbtn btn btn-link btn-lg text-white m-1"
                            href="{{ $item['red4'] }}" target="_blank" role="button"
                            data-mdb-ripple-color="dark">
                            <i class="bi bi-whatsapp" style="font-size: 35px;"></i></a>
                </div>
                <h3 class="bimTittle">{{ $item['nombre'] }}</h3>
            </div>
            <div class=" col">
                <!-- Teléfono -->
                <a class="rrssbtn btn btn-link btn-lg text-white m-1" href="tel:{{ $item['telefono'] }}" role="button"
                    data-mdb-ripple-color="dark">
                    <i class="bi bi-telephone-fill" style="font-size: 25px;"></i></a>
                <h5 class="references">Telefono</h5>
            </div>
            <div class=" col">
                <!-- Email -->
                <a class="rrssbtn btn btn-link btn-lg text-white m-1"
                    href="mailto: {{ $item['correo'] }}" role="button"
                    data-mdb-ripple-color="dark">
                    <i class="bi bi-envelope-at-fill" style="font-size: 25px;"></i></a>
                <h5 class="references">Correo</h5>
            </div>
            <div class=" col">
                <!-- Located -->
                <a class="rrssbtn btn btn-link btn-lg text-white m-1"
                    href="{{ $item['ubicacionlink'] }}"
                    target="_blank" role="button" data-mdb-ripple-color="dark">
                    <i class="bi bi-geo-alt-fill" style="font-size: 25px;"></i></a>
                <h5 class="references">Ubicacion</h5>
            </div>
            @endif
             @if($item['id']===2)
            <div class="col-md-4">
                <div class="icons">
                    <!-- Facebook -->
                    <a class="rrssbtn btn btn-link btn-lg text-white m-1" href="{{ $item['red1'] }}"
                        target="_blank" role="button" data-mdb-ripple-color="dark">
                        <i class="bi bi-facebook" style="font-size: 35px;"></i></a>

                    <!-- Instagram -->
                    <a class="rrssbtn btn btn-link btn-lg text-white m-1"
                        href="{{ $item['red2'] }}" target="_blank" role="button"
                        data-mdb-ripple-color="dark">
                        <i class="fa-brands fa-instagram" style="font-size: 35px;"></i>

                        <!-- Linkedin -->
                        <a class="rrssbtn btn btn-link btn-lg text-white m-1"
                            href="{{ $item['red3'] }}" target="_blank"
                            role="button" data-mdb-ripple-color="dark">
                            <i class="fa-brands fa-linkedin-in" style="font-size: 35px;"></i>

                            <!-- Whatsapp -->
                            <a class="rrssbtn btn btn-link btn-lg text-white m-1"
                                href="{{ $item['red4'] }}" target="_blank"
                                role="button" data-mdb-ripple-color="dark">
                                <i class="bi bi-whatsapp" style="font-size: 35px;"></i></a>
                </div>
                <h3 class="bimTittle">{{ $item['nombre'] }}</h3>
            </div>
            @break
            @endif
            @endforeach
        @endif
        </div>
        <!--copyright-->
        <div class=" col-md-12 p-3">
            <p class="copyright" style="font-style: italic;"> &copy; Copyright.</p>
        </div>
    </div>
</footer>

<!--estilo de fuente-->
<style>
    .rrssbtn {
        transition: background-color 0.5s;
    }

    .rrssbtn:hover {
        color: #FFFFFF;
        background-color: #E62E39;
        transform: translateY(-15px);
    }

    .bimTittle {
        font-family: 'Poppins', sans-serif;
        font-size: 24px;
        font-weight: normal;
    }

    .references {
        font-family: 'Poppins', sans-serif;
        font-size: 16px;
        font-weight: normal;
    }

    .copyright {
        font-family: 'Poppinsn Light', sans-serif;
        font-size: 16px;
        font-weight: 500;
    }
</style>
