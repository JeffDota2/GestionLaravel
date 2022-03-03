<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="row g-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
          </div>

        <div class="form-group">
            {{ Form::label('primernombre') }}
            {{ Form::text('primernombre', $dato->primernombre, ['class' => 'form-control' . ($errors->has('primernombre') ? ' is-invalid' : ''), 'placeholder' => 'Primernombre']) }}
            {!! $errors->first('primernombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundonombre') }}
            {{ Form::text('segundonombre', $dato->segundonombre, ['class' => 'form-control' . ($errors->has('segundonombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundonombre']) }}
            {!! $errors->first('segundonombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primerapellido') }}
            {{ Form::text('primerapellido', $dato->primerapellido, ['class' => 'form-control' . ($errors->has('primerapellido') ? ' is-invalid' : ''), 'placeholder' => 'Primerapellido']) }}
            {!! $errors->first('primerapellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundoapellido') }}
            {{ Form::text('segundoapellido', $dato->segundoapellido, ['class' => 'form-control' . ($errors->has('segundoapellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundoapellido']) }}
            {!! $errors->first('segundoapellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $dato->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $dato->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>