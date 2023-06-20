@extends('layouts.app')

@section('template_title')
Empleador
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
                            {{ __('Empleador') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('empletes.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Agregar nuevo empleador') }}
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

                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Telefono</th>
                                    <th>Fecha de Nacimento</th>
                                    <th>Estudios</th>
                                    <th>Area</th>
                                    <th>Status</th>
                                    <th>Cv</th>
                                    <th>Mensaje</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empletes as $emplete)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $emplete->nombre }}</td>
                                    <td>{{ $emplete->apellidos }}</td>
                                    <td>{{ $emplete->email }}</td>
                                    <td>{{ $emplete->telefono }}</td>
                                    <td>{{ $emplete->fechanacimento }}</td>
                                    <td>{{ $emplete->estudios }}</td>
                                    <td>{{ $emplete->area }}</td>
                                    <td>{{ $emplete->status }}</td>
                                    <td>
                                        <a class="d-block" href="{{ asset('' . $emplete->cv) }}" target="_blank" title="{{ $emplete->cv }}">
                                            <p>Ver curriculum</p>
                                        </a>
                                    </td>
                                    <td>{{ $emplete->mensaje }}</td>

                                    <td>
                                        <form action="{{ route('empletes.destroy',$emplete->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('empletes.show',$emplete->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('empletes.edit',$emplete->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $empletes->links() !!}
        </div>
    </div>
</div>
@endsection