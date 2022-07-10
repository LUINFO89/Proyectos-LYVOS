<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $factura->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('solicitud_id') }}
            {{ Form::select('solicitud_id', $solicitud , $factura->solicitud_id, ['class' => 'form-control' . ($errors->has('solicitud_id') ? ' is-invalid' : ''), 'placeholder' => 'Solicitud Id']) }}
            {!! $errors->first('solicitud_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clientes_id') }}
            {{ Form::select('clientes_id', $cliente , $factura->clientes_id, ['class' => 'form-control' . ($errors->has('clientes_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientes Id']) }}
            {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('identificacion') }}
            {{ Form::select('identificacion',$clienteiden, $factura->identificacion, ['class' => 'form-control' . ($errors->has('identificacion') ? ' is-invalid' : ''), 'placeholder' => 'Identificacion']) }}
            {!! $errors->first('identificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombresCliente') }}
            {{ Form::text('nombresCliente', $factura->nombresCliente, ['class' => 'form-control' . ($errors->has('nombresCliente') ? ' is-invalid' : ''), 'placeholder' => 'Nombrescliente']) }}
            {!! $errors->first('nombresCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellidosCliente') }}
            {{ Form::text('apellidosCliente', $factura->apellidosCliente, ['class' => 'form-control' . ($errors->has('apellidosCliente') ? ' is-invalid' : ''), 'placeholder' => 'Apellidoscliente']) }}
            {!! $errors->first('apellidosCliente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $factura->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $factura->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $factura->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('servicios_id') }}
            {{ Form::text('servicios_id', $factura->servicios_id, ['class' => 'form-control' . ($errors->has('servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Id']) }}
            {!! $errors->first('servicios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detalleFactura') }}
            {{ Form::text('detalleFactura', $factura->detalleFactura, ['class' => 'form-control' . ($errors->has('detalleFactura') ? ' is-invalid' : ''), 'placeholder' => 'Detallefactura']) }}
            {!! $errors->first('detalleFactura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $factura->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precioServicio') }}
            {{ Form::text('precioServicio', $factura->precioServicio, ['class' => 'form-control' . ($errors->has('precioServicio') ? ' is-invalid' : ''), 'placeholder' => 'Precioservicio']) }}
            {!! $errors->first('precioServicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total') }}
            {{ Form::text('total', $factura->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observaciones') }}
            {{ Form::text('observaciones', $factura->observaciones, ['class' => 'form-control' . ($errors->has('observaciones') ? ' is-invalid' : ''), 'placeholder' => 'Observaciones']) }}
            {!! $errors->first('observaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::select('estado', ["Seleccione","Facturado", "Sin Facturar", "Pendiente"], 0 ,['class' => 'form-control']) }}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>