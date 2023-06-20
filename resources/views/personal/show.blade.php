@extends('layouts.app')

@section('template_title')
    {{ $personal->name ?? "{{ __('Mostrar') Personal" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Personal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personals.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $personal->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $personal->email }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $personal->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $personal->area }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $personal->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            {{ $personal->img }}
                        </div>
                        <div class="form-group">
                            <strong>Twiter:</strong>
                            {{ $personal->twiter }}
                        </div>
                        <div class="form-group">
                            <strong>Facebook:</strong>
                            {{ $personal->facebook }}
                        </div>
                        <div class="form-group">
                            <strong>Instagram:</strong>
                            {{ $personal->instagram }}
                        </div>
                        <div class="form-group">
                            <strong>Linkedin:</strong>
                            {{ $personal->linkedin }}
                        </div>
                        <div class="form-group">
                            <strong>Valoracion:</strong>
                            {{ $personal->valoracion }}
                        </div>
                        <form action="{{ route('personals.destroy',$personal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personals.show',$personal->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personals.edit',$personal->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
