@extends('pagina_web.estaticos.header')

@section('template_title')
    Business in motion
@endsection

@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center">
        <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            //To minimise the height of chatbox
            $(document).ready(function() {
                window.addEventListener('dfMessengerLoaded', function(event) {
                    $r1 = document.querySelector("df-messenger");
                    $r2 = $r1.shadowRoot.querySelector("df-messenger-chat");
                    $r3 = $r2.shadowRoot.querySelector("df-messenger-user-input"); //for other mods
                    var sheet = new CSSStyleSheet;
                    // manage box height from here
                    sheet.replaceSync(`div.chat-wrapper[opened="true"] { height: 450px }`);
                    $r2.shadowRoot.adoptedStyleSheets = [sheet];
                });
            });
        </script>

        @if (\Route::currentRouteName() === 'web')
            @include('pagina_web.seciones.index')
        @elseif(\Route::currentRouteName() === 'bima')
            @include('pagina_web.seciones.bima')
        @elseif(\Route::currentRouteName() === 'bims')
            @include('pagina_web.seciones.bims')
        @elseif(\Route::currentRouteName() === 'conocenos')
            @include('pagina_web.seciones.conocenos')
        @elseif(\Route::currentRouteName() === 'contacto')
            @include('pagina_web.seciones.contacto')
        @elseif(\Route::currentRouteName() === 'consultoria')
            @include('pagina_web.seciones.consultoria')
        @elseif(\Route::currentRouteName() === 'empleat')
            @include('pagina_web.seciones.empleate')
        @elseif(\Route::currentRouteName() === 'marketing')
            @include('pagina_web.seciones.marketing')
        @elseif(\Route::currentRouteName() === 'pvideografica')
            @include('pagina_web.seciones.pvideografica')
        @elseif(\Route::currentRouteName() === 'qhacemos')
            @include('pagina_web.seciones.qhacemos')
        @elseif(\Route::currentRouteName() === 'qofrecemos')
            @include('pagina_web.seciones.qofrecemos')
        @elseif(\Route::currentRouteName() === 'qsomos')
            @include('pagina_web.seciones.qsomos')
        @endif
    </div>
@endsection
