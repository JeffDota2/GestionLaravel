@extends('layouts.app')

@section('template_title')
    {{ $educacione->name ?? 'Show Educacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Educacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('educaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Unidad Educativa:</strong>
                            {{ $educacione->unidad_educativa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Unidad Educativa:</strong>
                            {{ $educacione->fecha_inicio_unidad_educativa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Unidad Educativa:</strong>
                            {{ $educacione->fecha_fin_unidad_educativa }}
                        </div>
                        <div class="form-group">
                            <strong>Superior:</strong>
                            {{ $educacione->superior }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Superior:</strong>
                            {{ $educacione->fecha_inicio_superior }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Superior:</strong>
                            {{ $educacione->fecha_fin_superior }}
                        </div>
                        <div class="form-group">
                            <strong>Cursos:</strong>
                            {{ $educacione->cursos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Cursos:</strong>
                            {{ $educacione->fecha_inicio_cursos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Cursos:</strong>
                            {{ $educacione->fecha_fin_cursos }}
                        </div>
                        <div class="form-group">
                            <strong>Talleres:</strong>
                            {{ $educacione->talleres }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Talleres:</strong>
                            {{ $educacione->fecha_inicio_talleres }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Talleres:</strong>
                            {{ $educacione->fecha_fin_talleres }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
