@extends('layouts.app')

@section('template_title')
    {{ $empleadoo->name ?? "{{ __('Show') Empleadoo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Empleadoo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleadoos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $empleadoo->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $empleadoo->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $empleadoo->email }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $empleadoo->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $empleadoo->area }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $empleadoo->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            {{ $empleadoo->img }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $empleadoo->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Twiter:</strong>
                            {{ $empleadoo->twiter }}
                        </div>
                        <div class="form-group">
                            <strong>Facebook:</strong>
                            {{ $empleadoo->facebook }}
                        </div>
                        <div class="form-group">
                            <strong>Instagram:</strong>
                            {{ $empleadoo->instagram }}
                        </div>
                        <div class="form-group">
                            <strong>Linkedin:</strong>
                            {{ $empleadoo->linkedin }}
                        </div>
                        <div class="form-group">
                            <strong>Valoracion:</strong>
                            {{ $empleadoo->valoracion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
