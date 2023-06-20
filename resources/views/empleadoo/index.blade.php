@extends('layouts.app')

@section('template_title')
Empleadoo
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Empleadoo') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('empleadoos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Create New') }}
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
                                    <th>Empresa</th>
                                    <th>Area</th>
                                    <th>Descripcion</th>
                                    <th>Img</th>
                                    <th>Fecha</th>
                                    <th>Twiter</th>
                                    <th>Facebook</th>
                                    <th>Instagram</th>
                                    <th>Linkedin</th>
                                    <th>Valoracion</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empleadoos as $empleadoo)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $empleadoo->nombre }}</td>
                                    <td>{{ $empleadoo->apellidos }}</td>
                                    <td>{{ $empleadoo->email }}</td>
                                    <td>{{ $empleadoo->empresa }}</td>
                                    <td>{{ $empleadoo->area }}</td>
                                    <td>{{ $empleadoo->descripcion }}</td>
                                    <td class="col-md-2"><img class="w-100" src="{{ asset('' . $empleadoo->img) }}"></td>
                                    <td>{{ $empleadoo->fecha }}</td>
                                    <td class="col"><a style="font-size: 2rem;" href="{{ $empleadoo->twiter }}"><i class="bi bi-twitter"></i></a></td>
                                    <td class="col"><a style="font-size: 2rem;" href="{{ $empleadoo->facebook }}"><i class="bi bi-facebook"></i></a></td>
                                    <td class="col"><a style="font-size: 2rem;" href="{{ $empleadoo->instagram }}"><i class="bi bi-instagram"></i></a></td>
                                    <td class="col"><a style="font-size: 2rem;" href="{{ $empleadoo->linkedin }}"><i class="bi bi-linkedin"></i></a></td>
                                    <td>{{ $empleadoo->valoracion }}</td>

                                    <td>
                                        <form action="{{ route('empleadoos.destroy',$empleadoo->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('empleadoos.show',$empleadoo->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('empleadoos.edit',$empleadoo->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $empleadoos->links() !!}
        </div>
    </div>
</div>
@endsection