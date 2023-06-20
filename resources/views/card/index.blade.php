@extends('layouts.app')

@section('template_title')
    Cards
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="form-group col-md-4 p-3">
                <input type="text" class="form-control" id="filtroTabla" placeholder="Filtrar tabla">
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ basename(request()->url()) }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('cards.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Crear nuevas vistas') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover tabla-filtrable" id="tablaSuscripciones">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Titulo</th>
                                        <th>Img</th>
                                        <th>Descripcion</th>
                                        <th>Link</th>
                                        <th>Tipo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cards as $card)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $card->titulo }}</td>
                                            <td class="col-md-4"><img class="w-100" src="{{ asset('' . $card->img) }}">
                                            </td>
                                            <td>{{ $card->descripcion }}</td>
                                            <td>{{ $card->link }}</td>
                                            <td>{{ $card->tipo }}</td>

                                            <td>
                                                <form action="{{ route('cards.destroy', $card->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('cards.show', $card->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('cards.edit', $card->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $cards->links() !!}
            </div>
        </div>
    </div>
@endsection
