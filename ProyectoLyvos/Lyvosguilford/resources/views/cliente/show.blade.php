@extends('layouts.appHome')

@section('template_title')
    {{ $cliente->name ?? 'Show Cliente' }}
@endsection

@section('content')
    <section class="content container-fluid"style="margin-top: 4%">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('clientes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Identificacion:</strong>
                            {{ $cliente->identificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrescliente:</strong>
                            {{ $cliente->nombresCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidoscliente:</strong>
                            {{ $cliente->apellidosCliente }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $cliente->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $cliente->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $cliente->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $cliente->genero }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios Id:</strong>
                            {{ $cliente->servicios_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
