@extends('layouts.app')

@section('template_title')
    Areas de BIM
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
                                {{ __('Datos de las Areas de BIM') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('bimsdatos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevas areas de BIM') }}
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
										<th>Red1</th>
										<th>Red2</th>
										<th>Red3</th>
										<th>Red4</th>
										<th>Telefono</th>
										<th>Correo</th>
										<th>Ubicacionlink</th>
										<th>Ubicaciontext</th>
										<th>Calendarlink</th>
										<th>Mision</th>
										<th>Vision</th>
										<th>Valores</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bimsdatos as $bimsdato)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $bimsdato->nombre }}</td>
											<td class="col-md-1"><a href="{{ $bimsdato->red1 }}">{{ $bimsdato->red1 }}</a></td>
											<td class="col-md-1"><a href="{{ $bimsdato->red2 }}">{{ $bimsdato->red2 }}</a></td>
											<td class="col-md-1"><a href="{{ $bimsdato->red3 }}">{{ $bimsdato->red3 }}</a></td>
											<td class="col-md-1"><a href="{{ $bimsdato->red4 }}">{{ $bimsdato->red4 }}</a></td>
											<td><a href="tel:{{ $bimsdato->telefono }}">{{ $bimsdato->telefono }}</a></td>
											<td>{{ $bimsdato->correo }}</td>
											<td class="col-md-1"><a href="{{ $bimsdato->ubicacionlink }}">{{ $bimsdato->ubicacionlink }}</a></td>
											<td class="col-md-1">{{ $bimsdato->ubicaciontext }}</td>
											<td>{{ $bimsdato->calendarlink }}</td>
											<td>{{ $bimsdato->mision }}</td>
											<td>{{ $bimsdato->vision }}</td>
											<td>{{ $bimsdato->valores }}</td>

                                            <td>
                                                <form class="d-flex flex-column" action="{{ route('bimsdatos.destroy',$bimsdato->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('bimsdatos.show',$bimsdato->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('bimsdatos.edit',$bimsdato->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $bimsdatos->links() !!}
            </div>
        </div>
    </div>
@endsection
