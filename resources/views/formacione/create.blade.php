@extends('layouts.app')

@section('template_title')
Agrega tu formacion Academica
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Escribe tu formacion Academica</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('formaciones.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('formacione.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection