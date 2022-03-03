@extends('layouts.app')

@section('template_title')
    {{ $formacione->name ?? 'Show Formacione' }}
@endsection
<h2> Formacion Academica</h2>
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Formacion Academica</span>
                        </div>
                    <br>
                        <div class="float-right">
                            <a class="btn btn-warning" href="{{ route('formaciones.index') }}"> Regresar</a>
                        </div>
                    </div>
                    <br>
                    <div class="card-body ">
                        
                        <div class="form-group">
                            <strong>Unidad Educativa:</strong>
                            {{ $formacione->unidad_educativa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Unidad Educativa:</strong>
                            {{ $formacione->fecha_inicio_unidad_educativa }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Unidad Educativa:</strong>
                            {{ $formacione->fecha_fin_unidad_educativa }}
                        </div>
                        <div class="form-group">
                            <strong>Superior:</strong>
                            {{ $formacione->superior }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Superior:</strong>
                            {{ $formacione->fecha_inicio_superior }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Superior:</strong>
                            {{ $formacione->fecha_fin_superior }}
                        </div>
                        <div class="form-group">
                            <strong>Cursos:</strong>
                            {{ $formacione->cursos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Cursos:</strong>
                            {{ $formacione->fecha_inicio_cursos }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Cursos:</strong>
                            {{ $formacione->fecha_fin_cursos }}
                        </div>
                        <div class="form-group">
                            <strong>Talleres:</strong>
                            {{ $formacione->talleres }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio Talleres:</strong>
                            {{ $formacione->fecha_inicio_talleres }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin Talleres:</strong>
                            {{ $formacione->fecha_fin_talleres }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
