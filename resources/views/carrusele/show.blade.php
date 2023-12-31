@extends('layouts.app')

@section('template_title')
    {{ $carrusele->name ?? "{{ __('Mostrar') Imagen del carrusel" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Imagen del carrusel</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('carruseles.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Img:</strong>
                            <img src="{{ asset($carrusele->img) }}">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
