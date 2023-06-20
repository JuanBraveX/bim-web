@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="w-100  d-flex text-center">
    <img src="IMG/Empleate/Empleate_Bim.png" id="BimImg" class="w-100">
</div>

<div class="col-md-10 text-center">
    <div>
        <div class="d-flex text-center justify-content-center">
            <div class="col-md-12 p-3 mt-3">
                <h1 class="titleE lh-base">¡Únete al equipo de Business in Motion! Pon a prueba tus conocimientos y crece
                    de manera profesional en un excelente ambiente laboral.</h1>
            </div>
        </div>
    </div>

    <!--estilos de las fuentes-->
    <style>
        .titleE {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: normal;
        }

        .textStart {
            font-family: 'Poppins', sans-serif;
            font-size: 24px;
            font-weight: 500;
        }

        .completeForm {
            font-family: 'Poppins', sans-serif;
            font-size: 36px;
            font-weight: 500;
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
        }

        .btnSendForm:hover {
            color: #141A43;
            background-color: #FFFFFF;
        }

        .opinion {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: bold;
        }

        .name {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: bold;
        }

        .idd {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: normal;
        }

        .empresa {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: normal;
        }

        .joinText {
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            font-weight: normal;
            text-align: justify;
        }

        .iconStars {
            color: #DAA520;
        }

        .iconTw {
            color: #00acee;
        }

        .iconFb {
            color: #3b5998;
        }

        .iconIg {
            color: #3f729b;
        }

        .iconIn {
            color: #0e76a8;
        }

        .subtitleMain {
            font-family: 'Poppins', sans-serif;
            font-size: 32px;
            font-weight: normal;
            color: #FFFFFF;
        }

        .form-label {
            font-family: 'Poppins', sans-serif;
            font-size: 20px;
            font-weight: normal;
            color: #FFFFFF;
        }

        .empresaGerente {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 16px;
        }
    </style>


</div>
<div id="formulario">

    <!--Formulario-->
    <div class="container" style="margin-top: 24px; margin-bottom: 24px;">
        <form class="formFont p-5 text-black rounded" style="background-color: #5C8AB4;"method="POST" action="{{ route('empletes.storeP') }}"  role="form" enctype="multipart/form-data">
            @csrf
            <!-- 2 column grid layout with text inputs for the first and last names -->

            <!--Tittle-->
            <div class="w-100">
                <div id="title" class="text-center w-100 d-md-block">
                    <h1 class="completeForm text-white mb-5" style="text-transform: uppercase;">Completa el formulario
                    </h1>
                </div>
            </div>

            <!-- <h3 class="subtitleMain text-center mb-3">Información Personal</h3> -->
            <div class="row mb-4">
                <div class="col-md-6 mb-3">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1">Nombre*</label>
                        <input type="text" id="form6Example1" class="form-control" name="nombre"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">Apellidos*</label>
                        <input type="text" id="form6Example2" class="form-control" name="apellidos"/>

                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Email input -->
                    <div class="form-outline mb-3 mt-3">
                        <label class="form-label" for="form6Example5">Email*</label>
                        <input type="email" id="form6Example5" class="form-control" name="email"/>

                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Number input -->
                    <div class="form-outline mb-3 mt-3">
                        <label class="form-label" for="form6Example6">Teléfono*</label>
                        <input type="tel" id="form6Example6" class="form-control" name="telefono"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Fecha de Nacimento*</label>
                        <input type="date" id="form6Example6" class="form-control" name="fechanacimento"/>
                    </div>
                </div>
            </div>
            <h3 class="subtitleMain text-center mb-3">Información Profesional</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Último grado de estudios*</label>
                        <select class="form-select" aria-label="Default select example" name="estudios">
                            <option selected>Seleciona alguno</option>
                            <option value="Universidad truca">Universidad truca</option>
                            <option value="Universidad finalizada">Universidad finalizada</option>
                            <option value="Practicas">Practicas</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Selecciona el área de tu interés*</label>
                        <select class="form-select" aria-label="Default select example" name="area">
                            <option selected>Seleciona alguno</option>
                            <option value="Desarrollo tecnologico">Desarrollo tecnologico</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Ventas">Ventas</option>
                            <option value="Recursos Humanos">Recursos Humanos</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Status*</label>
                        <select class="form-select" aria-label="Default select example" name="status">
                            <option selected>Seleciona alguno</option>
                            <option value="Desempleado">Desempleado</option>
                            <option value="Estudiando">Estudiando</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example6">Agregar tu CV*</label>
                        <input type="file" id="form6Example6" class="form-control" name="cv"/>
                    </div>
                </div>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4 text-center">
                <label class="form-label " for="form6Example7">Descripción breve del por qué te gustaría trabajar con
                    nosotros*</label>
                <textarea class="form-control mb-3" id="form6Example7" rows="4" name="mensaje"></textarea>

            </div>

            <!--boton enviar-->
            <div class="text-center">
                <button type="submit" class="btnSendForm btn btn-primary btn-lg"
                    style="opacity: 0.83; ">Enviar</button>
            </div>
        </form>
    </div>
</div>

<!--opinion de profesionales-->
<div id="opiniones">
    <div class="w-100">
        <div class="text-center w-100 d-md-block">
            <hr>
            <h3 class="opinion" style="text-transform: uppercase;  color: #597FAB">Revisa la opinión de profesionales
            </h3>
        </div>
    </div>

    <div class="container" style="margin-top: 24px; margin-bottom: 24px;">
        <div class="row d-flex justify-content-center text-center">
            <!--juan-->
            <!--  style="background-color: rgba(92, 138, 180, 0.37);" -->
            
            <!--web-->
            @php
                $url = route('empleadoos.empleadoosget');
                $json = file_get_contents($url);
                $data = json_decode($json, true);
            @endphp
            @if (!empty($data))
                @foreach ($data as $item)
                    <div class="col-md-4">
                <div class="container p-3 d-flex justify-content-center text-center h-100 ">
                    <div class="image d-flex flex-column justify-content-center align-items-center rounded shadow ">
                        <h5 class="name mt-3">{{ $item['nombre'] }}</h5>
                        <p class="idd">{{ $item['email'] }}</p>
                        <img class="rounded-circle shadow-4-strong w-50" src="{{ asset( $item['img'] ) }}" />
                        <div class="mt-3">
                            <p class="empresa m-0">{{ $item['empresa'] }}</p>
                            <p class="empresaGerente">{{ $item['area'] }}</p>
                        </div>
                        <div class=" px-2 rounded mt-3 date ">
                            <span class="joinText">{{ $item['descripcion'] }}</span>
                        </div>
                        <div class="container-fluif">
                            <div class="iconStars rating mb-3">
                                @for($i = 0; $i < $item['valoracion']; $i++)
                                <span class="bi bi-star-fill"></span>
                                @endfor
                            </div>
                            <div class="text mt-3">
                                <p class="empresa">Se unió en agosto de 2022.</p>
                            </div>
                            <!--redes sociales-->
                            <div class="d-flex justify-content-center align-items-center mb-3">
                                <a href="{{ $item['twiter'] }}" target="_blank"> <i
                                        class="iconTw bi bi-twitter m-2"></i></a>
                                <a href="{{ $item['facebook'] }}" target="_blank"> <i
                                        class="iconFb bi bi-facebook m-2"></i></a>
                                <a href="{{ $item['instagram'] }}" target="_blank"><i
                                        class="iconIg bi bi-instagram m-2 text-danger"></i></a>
                                <a href="{{ $item['linkedin'] }}"
                                    target="_blank"><i class="iconIn bi bi-linkedin m-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
