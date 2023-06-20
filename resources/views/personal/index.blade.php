@extends('layouts.app')

@section('template_title')
    Personal
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
                                {{ __('Personal') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personals.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo personal') }}
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
										<th>Email</th>
										<th>Empresa</th>
										<th>Area</th>
										<th>Descripcion</th>
										<th>Img</th>
										<th>Twiter</th>
										<th>Facebook</th>
										<th>Instagram</th>
										<th>Linkedin</th>
										<th>Valoracion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personals as $personal)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $personal->nombre }}</td>
											<td>{{ $personal->email }}</td>
											<td>{{ $personal->empresa }}</td>
											<td>{{ $personal->area }}</td>
											<td>{{ $personal->descripcion }}</td>
											<td class="col-md-4"><img class="w-100" src="{{ asset('' . $personal->img) }}"></td>
											<td>{{ $personal->twiter }}</td>
											<td>{{ $personal->facebook }}</td>
											<td>{{ $personal->instagram }}</td>
											<td>{{ $personal->linkedin }}</td>
											<td>{{ $personal->valoracion }}</td>

                                            <td>
                                                <form action="{{ route('personals.destroy',$personal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personals.show',$personal->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personals.edit',$personal->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $personals->links() !!}
            </div>
        </div>
    </div>
@endsection
