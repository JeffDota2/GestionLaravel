<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $referencia->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apell') }}
            {{ Form::text('apell', $referencia->apell, ['class' => 'form-control' . ($errors->has('apell') ? ' is-invalid' : ''), 'placeholder' => 'Apell']) }}
            {!! $errors->first('apell', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telef') }}
            {{ Form::text('telef', $referencia->telef, ['class' => 'form-control' . ($errors->has('telef') ? ' is-invalid' : ''), 'placeholder' => 'Telef']) }}
            {!! $errors->first('telef', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parents') }}
            {{ Form::text('parents', $referencia->parents, ['class' => 'form-control' . ($errors->has('parents') ? ' is-invalid' : ''), 'placeholder' => 'Parents']) }}
            {!! $errors->first('parents', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $referencia->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $referencia->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $referencia->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('parentesco') }}
            {{ Form::text('parentesco', $referencia->parentesco, ['class' => 'form-control' . ($errors->has('parentesco') ? ' is-invalid' : ''), 'placeholder' => 'Parentesco']) }}
            {!! $errors->first('parentesco', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>