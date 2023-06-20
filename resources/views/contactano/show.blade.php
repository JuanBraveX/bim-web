@extends('layouts.app')

@section('template_title')
    {{ $contactano->name ?? "{{ __('Mostrar') Prospecto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Prospecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('contactanos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $contactano->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $contactano->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $contactano->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $contactano->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $contactano->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Puesto:</strong>
                            {{ $contactano->puesto }}
                        </div>
                        <div class="form-group">
                            <strong>Mensaje:</strong>
                            {{ $contactano->mensaje }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
