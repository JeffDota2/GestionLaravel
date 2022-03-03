<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="row g-3">
            <div class="col-5 ">
            {{ Form::label('unidad_educativa') }}
            {{ Form::text('unidad_educativa', $formacione->unidad_educativa, ['class' => 'form-control' . ($errors->has('unidad_educativa') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Educativa']) }}
            {!! $errors->first('unidad_educativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
            <div class="col-2">
            <div class="form-group">
                {{ Form::label('fecha_inicio') }}
                {{ Form::text('fecha_inicio_unidad_educativa', $formacione->fecha_inicio_unidad_educativa, ['class' => 'form-control' . ($errors->has('fecha_inicio_unidad_educativa') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Unidad Educativa']) }}
                {!! $errors->first('fecha_inicio_unidad_educativa', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col-2   ">
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::text('fecha_fin_unidad_educativa', $formacione->fecha_fin_unidad_educativa, ['class' => 'form-control' . ($errors->has('fecha_fin_unidad_educativa') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Unidad Educativa']) }}
            {!! $errors->first('fecha_fin_unidad_educativa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>

    
        <div class="col-5   ">
            {{ Form::label('superior') }}
            {{ Form::text('superior', $formacione->superior, ['class' => 'form-control' . ($errors->has('superior') ? ' is-invalid' : ''), 'placeholder' => 'Superior']) }}
            {!! $errors->first('superior', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-2">
        <div class="form-group">
            {{ Form::label('fecha_inicio') }}
            {{ Form::text('fecha_inicio_superior', $formacione->fecha_inicio_superior, ['class' => 'form-control' . ($errors->has('fecha_inicio_superior') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Superior']) }}
            {!! $errors->first('fecha_inicio_superior', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
        <div class="col-2">
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::text('fecha_fin_superior', $formacione->fecha_fin_superior, ['class' => 'form-control' . ($errors->has('fecha_fin_superior') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Superior']) }}
            {!! $errors->first('fecha_fin_superior', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            {{ Form::label('cursos') }}
            {{ Form::text('cursos', $formacione->cursos, ['class' => 'form-control' . ($errors->has('cursos') ? ' is-invalid' : ''), 'placeholder' => 'Cursos']) }}
            {!! $errors->first('cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col-2">

        <div class="form-group">
            {{ Form::label('fecha_inicio_cursos') }}
            {{ Form::text('fecha_inicio_cursos', $formacione->fecha_inicio_cursos, ['class' => 'form-control' . ($errors->has('fecha_inicio_cursos') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Cursos']) }}
            {!! $errors->first('fecha_inicio_cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col-2">

        <div class="form-group">
            {{ Form::label('fecha_fin_cursos') }}
            {{ Form::text('fecha_fin_cursos', $formacione->fecha_fin_cursos, ['class' => 'form-control' . ($errors->has('fecha_fin_cursos') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Cursos']) }}
            {!! $errors->first('fecha_fin_cursos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col-5">
        <div class="form-group">
            {{ Form::label('talleres') }}
            {{ Form::text('talleres', $formacione->talleres, ['class' => 'form-control' . ($errors->has('talleres') ? ' is-invalid' : ''), 'placeholder' => 'Talleres']) }}
            {!! $errors->first('talleres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="col-2">
        <div class="form-group">
            {{ Form::label('fecha_inicio_talleres') }}
            {{ Form::text('fecha_inicio_talleres', $formacione->fecha_inicio_talleres, ['class' => 'form-control' . ($errors->has('fecha_inicio_talleres') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Inicio Talleres']) }}
            {!! $errors->first('fecha_inicio_talleres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
        <div class="col-2">
        <div class="form-group">
            {{ Form::label('fecha_fin_talleres') }}
            {{ Form::text('fecha_fin_talleres', $formacione->fecha_fin_talleres, ['class' => 'form-control' . ($errors->has('fecha_fin_talleres') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin Talleres']) }}
            {!! $errors->first('fecha_fin_talleres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>


        
   

    </div>
    <br>
    <div class="box-footer mt15">
        <button type="submit" class="btn bg-success p-2 text-white bg-opacity-90 btn-group mr-2">Guardar</button>
    </div>
    
</div>