@extends('layouts.app')

@section('template_title')
    {{ $formacione->name ?? 'Show Formacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Formacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('formaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Empre:</strong>
                            {{ $formacione->empre }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $formacione->fecha_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $formacione->fecha_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $formacione->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Telf:</strong>
                            {{ $formacione->telf }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $formacione->empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Fech Ingreso:</strong>
                            {{ $formacione->fech_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Fech Fin:</strong>
                            {{ $formacione->fech_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Carg:</strong>
                            {{ $formacione->carg }}
                        </div>
                        <div class="form-group">
                            <strong>Telfono:</strong>
                            {{ $formacione->telfono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
