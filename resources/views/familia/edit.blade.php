@extends('layouts.app')

@section('template_title')
    {{ __('Actualizar') }} fotos de Familia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Actualizar') }} fotos de Familia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('familias.update', $familia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('familia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
