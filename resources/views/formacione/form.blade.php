<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('empre') }}
            {{ Form::text('empre', $formacione->empre, ['class' => 'form-control' . ($errors->has('empre') ? ' is-invalid' : ''), 'placeholder' => 'Empre']) }}
            {!! $errors->first('empre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_ingreso') }}
            {{ Form::text('fecha_ingreso', $formacione->fecha_ingreso, ['class' => 'form-control' . ($errors->has('fecha_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Ingreso']) }}
            {!! $errors->first('fecha_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_fin') }}
            {{ Form::text('fecha_fin', $formacione->fecha_fin, ['class' => 'form-control' . ($errors->has('fecha_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Fin']) }}
            {!! $errors->first('fecha_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $formacione->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telf') }}
            {{ Form::text('telf', $formacione->telf, ['class' => 'form-control' . ($errors->has('telf') ? ' is-invalid' : ''), 'placeholder' => 'Telf']) }}
            {!! $errors->first('telf', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('empresa') }}
            {{ Form::text('empresa', $formacione->empresa, ['class' => 'form-control' . ($errors->has('empresa') ? ' is-invalid' : ''), 'placeholder' => 'Empresa']) }}
            {!! $errors->first('empresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fech_ingreso') }}
            {{ Form::text('fech_ingreso', $formacione->fech_ingreso, ['class' => 'form-control' . ($errors->has('fech_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Fech Ingreso']) }}
            {!! $errors->first('fech_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fech_fin') }}
            {{ Form::text('fech_fin', $formacione->fech_fin, ['class' => 'form-control' . ($errors->has('fech_fin') ? ' is-invalid' : ''), 'placeholder' => 'Fech Fin']) }}
            {!! $errors->first('fech_fin', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carg') }}
            {{ Form::text('carg', $formacione->carg, ['class' => 'form-control' . ($errors->has('carg') ? ' is-invalid' : ''), 'placeholder' => 'Carg']) }}
            {!! $errors->first('carg', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telfono') }}
            {{ Form::text('telfono', $formacione->telfono, ['class' => 'form-control' . ($errors->has('telfono') ? ' is-invalid' : ''), 'placeholder' => 'Telfono']) }}
            {!! $errors->first('telfono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>