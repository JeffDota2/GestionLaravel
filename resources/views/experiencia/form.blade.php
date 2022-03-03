<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre_empresa') }}
            {{ Form::text('nombre_empresa', $experiencia->nombre_empresa, ['class' => 'form-control' . ($errors->has('nombre_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa']) }}
            {!! $errors->first('nombre_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio_empresa') }}
            {{ Form::text('fecha_inicio_empresa', $experiencia->fecha_inicio_empresa, ['class' => 'form-control' . ($errors->has('fecha_inicio_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Empresa']) }}
            {!! $errors->first('fecha_inicio_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin_empresa') }}
            {{ Form::text('fecha_fin_empresa', $experiencia->fecha_fin_empresa, ['class' => 'form-control' . ($errors->has('fecha_fin_empresa') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Empresa']) }}
            {!! $errors->first('fecha_fin_empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $experiencia->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $experiencia->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre_empresa2') }}
            {{ Form::text('nombre_empresa2', $experiencia->nombre_empresa2, ['class' => 'form-control' . ($errors->has('nombre_empresa2') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Empresa2']) }}
            {!! $errors->first('nombre_empresa2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('echa_inicio_empresa2') }}
            {{ Form::text('echa_inicio_empresa2', $experiencia->echa_inicio_empresa2, ['class' => 'form-control' . ($errors->has('echa_inicio_empresa2') ? ' is-invalid' : ''), 'placeholder' => 'Echa Inicio Empresa2']) }}
            {!! $errors->first('echa_inicio_empresa2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin_empresa2') }}
            {{ Form::text('fecha_fin_empresa2', $experiencia->fecha_fin_empresa2, ['class' => 'form-control' . ($errors->has('fecha_fin_empresa2') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Empresa2']) }}
            {!! $errors->first('fecha_fin_empresa2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono2') }}
            {{ Form::text('telefono2', $experiencia->telefono2, ['class' => 'form-control' . ($errors->has('telefono2') ? ' is-invalid' : ''), 'placeholder' => 'Telefono2']) }}
            {!! $errors->first('telefono2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo2') }}
            {{ Form::text('cargo2', $experiencia->cargo2, ['class' => 'form-control' . ($errors->has('cargo2') ? ' is-invalid' : ''), 'placeholder' => 'Cargo2']) }}
            {!! $errors->first('cargo2', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>