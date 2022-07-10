@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? 'Show Factura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $factura->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Solicitud Id:</strong>
                            {{ $factura->solicitud_id }}
                        </div>
                        <div class="form-group">
                            <strong>Clientes Id:</strong>
                            {{ $factura->clientes_id }}
                        </div>
                        <div class="form-group">
                            <strong>Identificacion:</strong>
                            {{ $factura->identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrescliente:</strong>
                            {{ $factura->nombresCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidoscliente:</strong>
                            {{ $factura->apellidosCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $factura->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $factura->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $factura->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios Id:</strong>
                            {{ $factura->servicios_id }}
                        </div>
                        <div class="form-group">
                            <strong>Detallefactura:</strong>
                            {{ $factura->detalleFactura }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $factura->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precioservicio:</strong>
                            {{ $factura->precioServicio }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $factura->total }}
                        </div>
                        <div class="form-group">
                            <strong>Observaciones:</strong>
                            {{ $factura->observaciones }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $factura->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
