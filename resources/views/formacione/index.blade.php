@extends('layouts.app')

@section('template_title')
    Agrega tu formacion Academica
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Formacion Academica') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('formaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>Id</th>
										<th>Unidad Educativa</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Superior</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Cursos</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Talleres</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formaciones as $formacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $formacione->unidad_educativa }}</td>
											<td>{{ $formacione->fecha_inicio_unidad_educativa }}</td>
											<td>{{ $formacione->fecha_fin_unidad_educativa }}</td>
											<td>{{ $formacione->superior }}</td>
											<td>{{ $formacione->fecha_inicio_superior }}</td>
											<td>{{ $formacione->fecha_fin_superior }}</td>
											<td>{{ $formacione->cursos }}</td>
											<td>{{ $formacione->fecha_inicio_cursos }}</td>
											<td>{{ $formacione->fecha_fin_cursos }}</td>
											<td>{{ $formacione->talleres }}</td>
											<td>{{ $formacione->fecha_inicio_talleres }}</td>
											<td>{{ $formacione->fecha_fin_talleres }}</td>

                                            <td>
                                                <form action="{{ route('formaciones.destroy',$formacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('formaciones.show',$formacione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('formaciones.edit',$formacione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $formaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
