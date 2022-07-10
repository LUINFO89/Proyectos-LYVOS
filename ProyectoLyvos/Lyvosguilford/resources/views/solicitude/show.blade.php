@extends('layouts.appHome')

@section('template_title')
    {{ $solicitude->name ?? 'Show Solicitude' }}
@endsection

@section('content')
    <section class="content container-fluid" style="margin-top: 4%">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Solicitude</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitudes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombresolicitud:</strong>
                            {{ $solicitude->nombreSolicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $solicitude->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $solicitude->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios Id:</strong>
                            {{ $solicitude->servicios_id }}
                        </div>
                        <div class="form-group">
                            <strong>Clientes Id:</strong>
                            {{ $solicitude->clientes_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
