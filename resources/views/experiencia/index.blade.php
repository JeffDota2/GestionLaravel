@extends('layouts.app')

@section('template_title')
    Experiencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Experiencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('experiencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre Empresa</th>
										<th>Fecha Inicio Empresa</th>
										<th>Fecha Fin Empresa</th>
										<th>Telefono</th>
										<th>Cargo</th>
										<th>Nombre Empresa2</th>
										<th>Echa Inicio Empresa2</th>
										<th>Fecha Fin Empresa2</th>
										<th>Telefono2</th>
										<th>Cargo2</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($experiencias as $experiencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $experiencia->nombre_empresa }}</td>
											<td>{{ $experiencia->fecha_inicio_empresa }}</td>
											<td>{{ $experiencia->fecha_fin_empresa }}</td>
											<td>{{ $experiencia->telefono }}</td>
											<td>{{ $experiencia->cargo }}</td>
											<td>{{ $experiencia->nombre_empresa2 }}</td>
											<td>{{ $experiencia->echa_inicio_empresa2 }}</td>
											<td>{{ $experiencia->fecha_fin_empresa2 }}</td>
											<td>{{ $experiencia->telefono2 }}</td>
											<td>{{ $experiencia->cargo2 }}</td>

                                            <td>
                                                <form action="{{ route('experiencias.destroy',$experiencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('experiencias.show',$experiencia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('experiencias.edit',$experiencia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $experiencias->links() !!}
            </div>
        </div>
    </div>
@endsection
