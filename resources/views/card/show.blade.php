@extends('layouts.app')

@section('template_title')
    {{ $card->name ?? "{{ __('Mostrar') Card" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Card</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cards.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $card->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Img:</strong>
                            <img class="col-md-4" src="{{ asset($card->img) }}">
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $card->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Link:</strong>
                            {{ $card->link }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $card->tipo }}
                        </div>

                    </div>
                    <div class="card-footer"> 
                        <form action="{{ route('cards.destroy', $card->id) }}" method="POST">
                            <a class="btn btn-sm btn-success"
                                href="{{ route('cards.edit', $card->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
