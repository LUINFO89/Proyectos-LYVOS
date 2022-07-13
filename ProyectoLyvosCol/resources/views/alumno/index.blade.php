@extends('layouts.template')

@section('template_title')
    Alumno
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alumno') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                <a href="{{ route('download-pdf') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('pdf') }}
                                  </a>
                              </div>
                             
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body " >
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered mt-5" >
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Tipo</th>
										<th>Identificacion</th>
										<th>Nombres</th>
										<th>Primer Apellido</th>
										<th>Segundo Apellido</th>
										<th>Correo</th>
										<th>Direccion</th>
										<th>Telefono</th>
										<th>Fecha Nacimiento</th>
										<th>Lugar Nacimiento</th>
										<th>RH</th>
										<th>Genero</th>
										<th>Programa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $alumno->tipoIdentificacionAlumno }}</td>
											<td>{{ $alumno->documentoIdentidadAlumno }}</td>
											<td>{{ $alumno->nombresAlumno }}</td>
											<td>{{ $alumno->primerApellidoAlumno }}</td>
											<td>{{ $alumno->segundoApellidoAlumno }}</td>
											<td>{{ $alumno->correoElectronicoAlumno }}</td>
											<td>{{ $alumno->direccionAlumno }}</td>
											<td>{{ $alumno->telefonoAlumno }}</td>
											<td>{{ $alumno->fechadeNacimientoAlumno }}</td>
											<td>{{ $alumno->lugarNacimientoAlumno }}</td>
											<td>{{ $alumno->tipodeSangreAlumno }}</td>
											<td>{{ $alumno->generoAlumno }}</td>
											<td>{{ $alumno->grados_id }}</td>

                                            <td>
                                                <form action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('alumnos.show',$alumno->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alumnos.edit',$alumno->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $alumnos->links() !!}
            </div>
        </div>
    </div>
@endsection
