@extends('layouts.app')

@section('template_title')
    {{ $familia->name ?? "{{ __('Mostrar') fotos de Familia" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} fotos de Familia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('familias.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Img:</strong>
                            <img class="w-100" src="{{ asset($familia->img) }}">
                        </div>
                        <form action="{{ route('familias.destroy',$familia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('familias.edit',$familia->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
