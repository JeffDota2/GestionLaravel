<div class="box box-info padding-1 mx-auto ">
    <div class="box-body ">
        
        <div class="row g-3">
            <div class="col-5 ">
                {{ Form::label('Nombre') }}
                {{ Form::text('Nombre', $dato->primernombre, ['class' => 'form-control' . ($errors->has('primernombre') ? ' is-invalid' : ''), 'placeholder' => 'Primer Nombre']) }}
                {!! $errors->first('primernombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-5">
                {{ Form::label('Nombre') }}
                {{ Form::text('Nombre', $dato->segundonombre, ['class' => 'form-control' . ($errors->has('segundonombre') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Nombre']) }}
                {!! $errors->first('segundonombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
          </div>
                    <br>

          <div class="row g-3">
            <div class="col-5">
                {{ Form::label('Apellido') }}
                {{ Form::text('Apellido', $dato->primerapellido, ['class' => 'form-control' . ($errors->has('primerapellido') ? ' is-invalid' : ''), 'placeholder' => 'Primer Apellido']) }}
                {!! $errors->first('primerapellido', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-5">
                {{ Form::label('Apellido') }}
                {{ Form::text('Apellido', $dato->segundoapellido, ['class' => 'form-control' . ($errors->has('segundoapellido') ? ' is-invalid' : ''), 'placeholder' => 'Segundo Apellido']) }}
                {!! $errors->first('segundoapellido', '<div class="invalid-feedback">:message</div>') !!}
            </div>
          </div>
                    <br>

          <div class="row g-3">
            <div class="col-5">
                {{ Form::label('Cedula') }}
                {{ Form::text('cedula', $dato->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
                {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="col-5">
                {{ Form::label('Direccion') }}
                {{ Form::text('Direccion', $dato->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
          </div>
                     <br>
    </div>
    <div class="box-footer mt15">
        <button type="submit" class="btn bg-success p-2 text-white bg-opacity-90 btn-group mr-2">Guardar</button>
    </div>

    <div class="box-footer mt15">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="create">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
    </div>
    
</div>

