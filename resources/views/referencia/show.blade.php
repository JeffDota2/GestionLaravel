@extends('layouts.app')

@section('template_title')
    {{ $referencia->name ?? 'Show Referencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Referencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('referencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $referencia->name }}
                        </div>
                        <div class="form-group">
                            <strong>Apell:</strong>
                            {{ $referencia->apell }}
                        </div>
                        <div class="form-group">
                            <strong>Telef:</strong>
                            {{ $referencia->telef }}
                        </div>
                        <div class="form-group">
                            <strong>Parents:</strong>
                            {{ $referencia->parents }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $referencia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $referencia->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $referencia->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Parentesco:</strong>
                            {{ $referencia->parentesco }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
