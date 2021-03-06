@extends('layouts.app')

@section('template_title')
<h2> Cargar Datos Personales </h2>
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><h2> Cargar Datos Personales </h2></span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('datos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('dato.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
