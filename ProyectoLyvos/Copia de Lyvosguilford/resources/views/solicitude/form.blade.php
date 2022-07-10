<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreSolicitud') }}
            {{ Form::text('nombreSolicitud', $solicitude->nombreSolicitud, ['class' => 'form-control' . ($errors->has('nombreSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Nombresolicitud']) }}
            {!! $errors->first('nombreSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $solicitude->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado', ["Seleccione","Pendiente", "En proceso", "Finalizado"], 0 ,['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('servicios_id') }}
            {{ Form::select('servicios_id', $servicios , $solicitude->servicios_id, ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Id']) }}
            {!! $errors->first('servicios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
  
        <div class="form-group">
            {{ Form::label('clientes_id') }}
            {{ Form::select('clientes_id', $clientes , $solicitude->clientes_id, ['class' => 'form-control' . ($errors->has('clientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientes Id']) }}
            {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>