<div class="box box-info padding-1">
    <div class="box-body">

        <!-- Nombres Completos -->
        <div class="row g-3">
            <div class="col-5 ">
                {{ Form::label('Nombre') }}
                {{ Form::text('primernombre', $dato->primernombre, ['class' => 'form-control' . ($errors->has('primernombre') ? ' is-invalid' : ''),'placeholder' => 'Nombre']) }}
                {!! $errors->first('primernombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="col-5 ">
                {{ Form::label('Nombre') }}
                {{ Form::text('segundonombre', $dato->segundonombre, ['class' => 'form-control' . ($errors->has('segundonombre') ? ' is-invalid' : ''),'placeholder' => 'Nombre']) }}
                {!! $errors->first('segundonombre', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <br>
        <!-- Apellidos Completos -->
        <div class="row g-3">
            <div class="col-5 ">
                {{ Form::label('Apellido') }}
                {{ Form::text('primerapellido', $dato->primerapellido, ['class' => 'form-control' . ($errors->has('primerapellido') ? ' is-invalid' : ''),'placeholder' => 'Apellido Paterno']) }}
                {!! $errors->first('primerapellido', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="col-5 ">
                {{ Form::label('Apellido') }}
                {{ Form::text('segundoapellido', $dato->segundoapellido, ['class' => 'form-control' . ($errors->has('segundoapellido') ? ' is-invalid' : ''),'placeholder' => 'Apellido Materno']) }}
                {!! $errors->first('segundoapellido', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <br>
        <!-- Cedula Y direccion -->
        <div class="row g-3">
            <div class="col-5 ">
                {{ Form::label('Cédula') }}
                {{ Form::text('cedula', $dato->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''),'placeholder' => 'Cédula']) }}
                {!! $errors->first('cedula', '<div class="invalid-feedback">:message</div>') !!}
            </div>


            <div class="col-5 ">
                {{ Form::label('dirección') }}
                {{ Form::text('direccion', $dato->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''),'placeholder' => 'Dirección']) }}
                {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <br>
        <!-- Boton Guardar -->

        <div class="box-footer mt20">

            <button type="submit" class="btn bg-success p-2 text-white bg-opacity-90 btn-group mr-2">Guardar</button>

        </div>
    </div>
</div>
