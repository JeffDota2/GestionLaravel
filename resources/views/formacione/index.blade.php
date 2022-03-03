@extends('layouts.app')

@section('template_title')
    Formacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Formacione') }}
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
                                        <th>No</th>
                                        
										<th>Empre</th>
										<th>Fecha Ingreso</th>
										<th>Fecha Fin</th>
										<th>Cargo</th>
										<th>Telf</th>
										<th>Empresa</th>
										<th>Fech Ingreso</th>
										<th>Fech Fin</th>
										<th>Carg</th>
										<th>Telfono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formaciones as $formacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $formacione->empre }}</td>
											<td>{{ $formacione->fecha_ingreso }}</td>
											<td>{{ $formacione->fecha_fin }}</td>
											<td>{{ $formacione->cargo }}</td>
											<td>{{ $formacione->telf }}</td>
											<td>{{ $formacione->empresa }}</td>
											<td>{{ $formacione->fech_ingreso }}</td>
											<td>{{ $formacione->fech_fin }}</td>
											<td>{{ $formacione->carg }}</td>
											<td>{{ $formacione->telfono }}</td>

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
