@extends('layouts.template')

@section('template_title')
    Calificacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3>               
                    <i class="nc-icon nc-book-bookmark"></i>
   
                    {{ __('Listado de  Calificiones') }}</h3>

                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                           

                             <div class="float-right">
                                <a href="{{ route('calificaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                <a href="{{ route('download-pdf-calificaciones') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Listado Generarl en PDF') }}
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
                                        
										<th>Id Identidad Alumno</th>
										<th>Alumno</th>
										<th>Id Asignatura Estudiante</th>
										<th>Materia</th>
										<th>Nota1</th>
										<th>Nota2</th>
										<th>Nota3</th>
										<th>Nota4</th>
										<th>Nota Final</th>
										<th>Id Curso Estudiante</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($calificaciones as $calificacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $calificacione->id_identidad_alumno }}</td>
											<td>{{ $calificacione->alumno }}</td>
											<td>{{ $calificacione->id_asignatura_estudiante }}</td>
											<td>{{ $calificacione->materia }}</td>
											<td>{{ $calificacione->nota1 }}</td>
											<td>{{ $calificacione->nota2 }}</td>
											<td>{{ $calificacione->nota3 }}</td>
											<td>{{ $calificacione->nota4 }}</td>
											<td>{{ $calificacione->nota_final }}</td>
											<td>{{ $calificacione->id_curso_estudiante }}</td>

                                            <td>
                                                <form action="{{ route('calificaciones.destroy',$calificacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('calificaciones.show',$calificacione->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('calificaciones.edit',$calificacione->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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

                        <div class="card-body">
                            @if (isset($errors) && $errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                {{$error}}
                                @endforeach
                            </div>
                            @endif
        
                            <form action="{{url('/calificaciones/importar')}}" method="POST" enctype="multipart/form-data">
                                @csrf
        
                                <input type="file" name="import_file" />
        
                                <button class="btn btn-primary" type="submit">Importar</button>
                            </form>
                        </div>
                    </div>
                </div>
                {!! $calificaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
