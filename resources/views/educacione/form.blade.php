<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('unidad_educativa') }}
            {{ Form::text('unidad_educativa', $educacione->unidad_educativa, ['class' => 'form-control' . ($errors->has('unidad_educativa') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Educativa']) }}
            {!! $errors->first('unidad_educativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio_unidad_educativa') }}
            {{ Form::text('fecha_inicio_unidad_educativa', $educacione->fecha_inicio_unidad_educativa, ['class' => 'form-control' . ($errors->has('fecha_inicio_unidad_educativa') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Unidad Educativa']) }}
            {!! $errors->first('fecha_inicio_unidad_educativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin_unidad_educativa') }}
            {{ Form::text('fecha_fin_unidad_educativa', $educacione->fecha_fin_unidad_educativa, ['class' => 'form-control' . ($errors->has('fecha_fin_unidad_educativa') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Unidad Educativa']) }}
            {!! $errors->first('fecha_fin_unidad_educativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('superior') }}
            {{ Form::text('superior', $educacione->superior, ['class' => 'form-control' . ($errors->has('superior') ? ' is-invalid' : ''), 'placeholder' => 'Superior']) }}
            {!! $errors->first('superior', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio_superior') }}
            {{ Form::text('fecha_inicio_superior', $educacione->fecha_inicio_superior, ['class' => 'form-control' . ($errors->has('fecha_inicio_superior') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Superior']) }}
            {!! $errors->first('fecha_inicio_superior', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin_superior') }}
            {{ Form::text('fecha_fin_superior', $educacione->fecha_fin_superior, ['class' => 'form-control' . ($errors->has('fecha_fin_superior') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Superior']) }}
            {!! $errors->first('fecha_fin_superior', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cursos') }}
            {{ Form::text('cursos', $educacione->cursos, ['class' => 'form-control' . ($errors->has('cursos') ? ' is-invalid' : ''), 'placeholder' => 'Cursos']) }}
            {!! $errors->first('cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio_cursos') }}
            {{ Form::text('fecha_inicio_cursos', $educacione->fecha_inicio_cursos, ['class' => 'form-control' . ($errors->has('fecha_inicio_cursos') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Cursos']) }}
            {!! $errors->first('fecha_inicio_cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin_cursos') }}
            {{ Form::text('fecha_fin_cursos', $educacione->fecha_fin_cursos, ['class' => 'form-control' . ($errors->has('fecha_fin_cursos') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Cursos']) }}
            {!! $errors->first('fecha_fin_cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('talleres') }}
            {{ Form::text('talleres', $educacione->talleres, ['class' => 'form-control' . ($errors->has('talleres') ? ' is-invalid' : ''), 'placeholder' => 'Talleres']) }}
            {!! $errors->first('talleres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_inicio_talleres') }}
            {{ Form::text('fecha_inicio_talleres', $educacione->fecha_inicio_talleres, ['class' => 'form-control' . ($errors->has('fecha_inicio_talleres') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Talleres']) }}
            {!! $errors->first('fecha_inicio_talleres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin_talleres') }}
            {{ Form::text('fecha_fin_talleres', $educacione->fecha_fin_talleres, ['class' => 'form-control' . ($errors->has('fecha_fin_talleres') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Talleres']) }}
            {!! $errors->first('fecha_fin_talleres', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>