@extends('layouts.app')

@section('template_title')
    {{ $experiencia->name ?? 'Show Experiencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Experiencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('experiencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Empresa:</strong>
                            {{ $experiencia->nombre_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Empresa:</strong>
                            {{ $experiencia->fecha_inicio_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Empresa:</strong>
                            {{ $experiencia->fecha_fin_empresa }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $experiencia->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $experiencia->cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Empresa2:</strong>
                            {{ $experiencia->nombre_empresa2 }}
                        </div>
                        <div class="form-group">
                            <strong>Echa Inicio Empresa2:</strong>
                            {{ $experiencia->echa_inicio_empresa2 }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Empresa2:</strong>
                            {{ $experiencia->fecha_fin_empresa2 }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono2:</strong>
                            {{ $experiencia->telefono2 }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo2:</strong>
                            {{ $experiencia->cargo2 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
