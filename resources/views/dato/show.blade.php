@extends('layouts.app')

@section('template_title')
    {{ $dato->name ?? 'Show Dato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Datos Personales</span>
                        </div>
                        <br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('datos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Primernombre:</strong>
                            {{ $dato->primernombre }}
                        </div>
                        <div class="form-group">
                            <strong>Segundonombre:</strong>
                            {{ $dato->segundonombre }}
                        </div>
                        <div class="form-group">
                            <strong>Primerapellido:</strong>
                            {{ $dato->primerapellido }}
                        </div>
                        <div class="form-group">
                            <strong>Segundoapellido:</strong>
                            {{ $dato->segundoapellido }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $dato->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $dato->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
