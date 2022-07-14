@extends('layouts.template')

@section('template_title')
Certificacione
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Certificacione') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('certificaciones.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                            <a href="{{ route('download-pdf-certificaciones') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('lista total de certificados en pdf') }}
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
                                    <!--th>No</th>
                                        
										<!--th>TipoID</th-->
                                    <th># </th>
                                    <th>Nombres</th>
                                    <th>Primer Apellido</th>
                                    <th>Segundo Apellido</th>
                                    <!--th>Email</th-->
                                    <th>Tipo Certificacion</th>
                                    <!--th>Ano Solicitado</th-->
                                    <th>Programa o curso Id</th>
                                    <th>Comentarios</th>
                                    <!--th>Descargarrecibocertificaciones</th>
										<th>Cargarrecibocertificaciones</th-->

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificaciones as $certificacione)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <!--td>{{ $certificacione->tipoIdentificacionCertificaciones }}</td>
											<td>{{ $certificacione->documentoIdentidadAlumno_id }}</td-->
                                    <td>{{ $certificacione->nombresCertificaciones }}</td>
                                    <td>{{ $certificacione->primerApellidoCertificaciones }}</td>
                                    <td>{{ $certificacione->segundoApellidoCertificaciones }}</td>
                                    <!--td>{{ $certificacione->correoElectronicoCertificaciones }}</td-->
                                    <td>{{ $certificacione->tipodeCertificaciones }}</td>
                                    <!--td>{{ $certificacione->anoCertificacionCertificaciones }}</td-->
                                    <td>{{ $certificacione->certificacionesGrado_id }}</td>
                                    <td>{{ $certificacione->comentariosCertificaciones }}</td>
                                    <!--td>{{ $certificacione->descargarReciboCertificaciones }}</td>
											<td>{{ $certificacione->cargarReciboCertificaciones }}</td-->

                                    <td>
                                        <form action="{{ route('certificaciones.destroy',$certificacione->id) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('certificaciones.show',$certificacione->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('certificaciones.edit',$certificacione->id) }}"><i
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
            {!! $certificaciones->links() !!}
        </div>
    </div>
</div>
@endsection