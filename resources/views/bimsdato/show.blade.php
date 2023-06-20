@extends('layouts.app')

@section('template_title')
    {{ $bimsdato->name ?? "{{ __('Mostrar') Areas de BIM" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Areas de BIM</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bimsdatos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $bimsdato->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Red1:</strong>
                            {{ $bimsdato->red1 }}
                        </div>
                        <div class="form-group">
                            <strong>Red2:</strong>
                            {{ $bimsdato->red2 }}
                        </div>
                        <div class="form-group">
                            <strong>Red3:</strong>
                            {{ $bimsdato->red3 }}
                        </div>
                        <div class="form-group">
                            <strong>Red4:</strong>
                            {{ $bimsdato->red4 }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $bimsdato->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $bimsdato->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacionlink:</strong>
                            {{ $bimsdato->ubicacionlink }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicaciontext:</strong>
                            {{ $bimsdato->ubicaciontext }}
                        </div>
                        <div class="form-group">
                            <strong>Calendarlink:</strong>
                            {{ $bimsdato->calendarlink }}
                        </div>
                        <div class="form-group">
                            <strong>Mision:</strong>
                            {{ $bimsdato->mision }}
                        </div>
                        <div class="form-group">
                            <strong>Vision:</strong>
                            {{ $bimsdato->vision }}
                        </div>
                        <div class="form-group">
                            <strong>Valores:</strong>
                            {{ $bimsdato->valores }}
                        </div>
                        <form class="d-flex flex-column" action="{{ route('bimsdatos.destroy',$bimsdato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bimsdatos.show',$bimsdato->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('bimsdatos.edit',$bimsdato->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
