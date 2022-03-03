@extends('layouts.app')

@section('template_title')
    Referencia
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Referencia') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('referencias.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Apell</th>
										<th>Telef</th>
										<th>Parents</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Telefono</th>
										<th>Parentesco</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($referencias as $referencia)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $referencia->name }}</td>
											<td>{{ $referencia->apell }}</td>
											<td>{{ $referencia->telef }}</td>
											<td>{{ $referencia->parents }}</td>
											<td>{{ $referencia->nombre }}</td>
											<td>{{ $referencia->apellido }}</td>
											<td>{{ $referencia->telefono }}</td>
											<td>{{ $referencia->parentesco }}</td>

                                            <td>
                                                <form action="{{ route('referencias.destroy',$referencia->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('referencias.show',$referencia->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('referencias.edit',$referencia->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $referencias->links() !!}
            </div>
        </div>
    </div>
@endsection
