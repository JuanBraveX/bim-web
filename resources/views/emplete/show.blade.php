@extends('layouts.app')

@section('template_title')
    {{ $emplete->name ?? "{{ __('Mostrar') Empleador" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Empleador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empletes.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $emplete->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $emplete->apellidos }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $emplete->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $emplete->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimento:</strong>
                            {{ $emplete->fechanacimento }}
                        </div>
                        <div class="form-group">
                            <strong>Estudios:</strong>
                            {{ $emplete->estudios }}
                        </div>
                        <div class="form-group">
                            <strong>Area:</strong>
                            {{ $emplete->area }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $emplete->status }}
                        </div>
                        <div class="form-group">
                            <strong>Cv:</strong>
                            {{ $emplete->cv }}
                        </div>
                        <div class="form-group">
                            <strong>Mensaje:</strong>
                            {{ $emplete->mensaje }}
                        </div>
                        <form action="{{ route('empletes.destroy',$emplete->id) }}" method="POST">
                                            
                                            <a class="btn btn-sm btn-success" href="{{ route('empletes.edit',$emplete->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
