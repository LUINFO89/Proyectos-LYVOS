@extends('layouts.template')

@section('template_title')
Solicitude
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Solicitude') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('solicitudes.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                            <a href="{{ route('download-pdf-solicitudes') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('lista total de solicitudes en pdf') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>TipoID</th>
                                    <th>Documento</th>
                                    <th>Nombres</th>
                                    <th>Primer Apellido</th>
                                    <!--th>Segundo Apellido</th>
										<!--th>Correo</th-->
                                    <th>Certificado</th>
                                    <th>Año a solicitar</th>
                                    <th>Programa o curso</th>
                                    <!--th>Otrossolicitud</th>
										<th>Comentariossolicitud</th>
										<th>Descargarrecibo</th>
										<th>Cargarrecibo</th-->

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($solicitudes as $solicitude)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $solicitude->tipoIdentificacionSolicitud }}</td>
                                    <td>{{ $solicitude->documentoIdentidadSolicitud }}</td>
                                    <td>{{ $solicitude->nombresSolicitud }}</td>
                                    <td>{{ $solicitude->primerApellidoSolicitud }}</td>
                                    <!--td>{{ $solicitude->segundoApellidoSolicitud }}</td>
											<td>{{ $solicitude->correoElectronicoSolicitud }}</td-->
                                    <td>{{ $solicitude->tipodeCertificacionSolicitus }}</td>
                                    <td>{{ $solicitude->anoCertificacionSolicitud }}</td>
                                    <td>{{ $solicitude->gradoSolicitud }}</td>
                                    <td>{{ $solicitude->otrosSolicitud }}</td>
                                    <td>{{ $solicitude->comentariosSolicitud }}</td>
                                    <td>{{ $solicitude->descargarRecibo }}</td>
                                    <td>{{ $solicitude->cargarRecibo }}</td>

                                    <td>
                                        <form action="{{ route('solicitudes.destroy',$solicitude->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('solicitudes.show',$solicitude->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('solicitudes.edit',$solicitude->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $solicitudes->links() !!}
        </div>
    </div>
</div>
@endsection