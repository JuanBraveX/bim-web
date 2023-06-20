@extends('layouts.app')

@section('template_title')
    {{ __('Agregar') }} Videos de Produccion videografica
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Agregar') }} Videos de Produccion videografica</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('pvideos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('pvideo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
