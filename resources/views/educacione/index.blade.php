@extends('layouts.app')

@section('template_title')
    Educacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Educacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('educaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Unidad Educativa</th>
										<th>Fecha Inicio Unidad Educativa</th>
										<th>Fecha Fin Unidad Educativa</th>
										<th>Superior</th>
										<th>Fecha Inicio Superior</th>
										<th>Fecha Fin Superior</th>
										<th>Cursos</th>
										<th>Fecha Inicio Cursos</th>
										<th>Fecha Fin Cursos</th>
										<th>Talleres</th>
										<th>Fecha Inicio Talleres</th>
										<th>Fecha Fin Talleres</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($educaciones as $educacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $educacione->unidad_educativa }}</td>
											<td>{{ $educacione->fecha_inicio_unidad_educativa }}</td>
											<td>{{ $educacione->fecha_fin_unidad_educativa }}</td>
											<td>{{ $educacione->superior }}</td>
											<td>{{ $educacione->fecha_inicio_superior }}</td>
											<td>{{ $educacione->fecha_fin_superior }}</td>
											<td>{{ $educacione->cursos }}</td>
											<td>{{ $educacione->fecha_inicio_cursos }}</td>
											<td>{{ $educacione->fecha_fin_cursos }}</td>
											<td>{{ $educacione->talleres }}</td>
											<td>{{ $educacione->fecha_inicio_talleres }}</td>
											<td>{{ $educacione->fecha_fin_talleres }}</td>

                                            <td>
                                                <form action="{{ route('educaciones.destroy',$educacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('educaciones.show',$educacione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('educaciones.edit',$educacione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $educaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
