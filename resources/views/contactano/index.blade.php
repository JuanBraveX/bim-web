@extends('layouts.app')

@section('template_title')
    Prospectos
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
                                {{ __('Prospectos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('contactanos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar nuevo Prospecto') }}
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
										<th>Empresa</th>
										<th>Puesto</th>
										<th>Mensaje</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contactanos as $contactano)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $contactano->nombre }}</td>
											<td>{{ $contactano->apellidos }}</td>
											<td>{{ $contactano->email }}</td>
											<td>{{ $contactano->telefono }}</td>
											<td>{{ $contactano->empresa }}</td>
											<td>{{ $contactano->puesto }}</td>
											<td>{{ $contactano->mensaje }}</td>

                                            <td>
                                                <form action="{{ route('contactanos.destroy',$contactano->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('contactanos.show',$contactano->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('contactanos.edit',$contactano->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $contactanos->links() !!}
            </div>
        </div>
    </div>
@endsection
