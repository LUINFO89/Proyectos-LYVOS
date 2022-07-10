<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('identificacion') }}
            {{ Form::text('identificacion', $cliente->identificacion, ['class' => 'form-control' . ($errors->has('identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Identificacion']) }}
            {!! $errors->first('identificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombresCliente') }}
            {{ Form::text('nombresCliente', $cliente->nombresCliente, ['class' => 'form-control' . ($errors->has('nombresCliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombrescliente']) }}
            {!! $errors->first('nombresCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('apellidosCliente') }}
            {{ Form::text('apellidosCliente' , $cliente->apellidosCliente, ['class' => 'form-control' . ($errors->has('apellidosCliente') ? ' is-invalid' : ''), 'placeholder' => 'Apellidoscliente']) }}
            {!! $errors->first('apellidosCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $cliente->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $cliente->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $cliente->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::select('genero', ["Seleccion","Masculino", "Femenino"], 0,['class' => 'form-control']) }}

        </div>
      

        <div class="form-group">
            {{ Form::label('servicios_id') }}

            {{ Form::select('servicios_id', $servicios , $cliente->servicios_id, ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Id']) }}
            {!! $errors->first('servicios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>