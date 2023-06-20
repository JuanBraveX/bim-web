@extends('layouts.app')

@section('template_title')
    {{ $pvideo->name ?? "{{ __('Mostrar') Videos de Produccion video grafica" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Videos de Produccion video grafica</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pvideos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Link:</strong>
                            {{ $pvideo->link }}
                        </div>
<form action="{{ route('pvideos.destroy',$pvideo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pvideos.show',$pvideo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pvideos.edit',$pvideo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
