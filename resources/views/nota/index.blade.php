@extends('layouts.template')

@section('template_title')
    Nota
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h3> <i class="nc-icon nc-hat-3"></i>   {{ __('Listado de notas') }}</h3>

                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            
                             <div class="float-right">
                                <a href="{{ route('notas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar Notas ') }}
                                </a>
                               
                              <a href="{{ route('notas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Imprimir listado de Notas en PDF ') }}
                              </a>

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
                                        
										
										<th>Asignatura</th>
                                        
										<th>Curso</th>
										<th>Nombres</th>
										<th>Nota1</th>
										<th>Nota2</th>
										<th>Nota3</th>
										<th>Nota4</th>
										<th>Nota Final</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notas as $nota)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
                                            <td>{{ $nota->asignatura->nombre_asignatura }}</td>
                                           
                                            
											<td>{{ $nota->alumno->nombresAlumno }}</td>
											<td>{{ $nota->nota1 }}</td>
											<td>{{ $nota->nota2 }}</td>
											<td>{{ $nota->nota3 }}</td>
											<td>{{ $nota->nota4 }}</td>
											<td>{{ $nota->nota_final }}</td>
											<td>{{ $nota->estado }}</td>

                                            <td>
                                                <form action="{{ route('notas.destroy',$nota->id) }}" method="POST" >
                                                    <a class="btn btn-sm btn-primary " style="width: 90%"href="{{ route('notas.show',$nota->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success"style="width: 90%"href="{{ route('notas.edit',$nota->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="Enviar" class="btn btn-danger btn-sm" style="width: 90%"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-body">
                                @if (isset($errors) && $errors->any())
                                <div class="alert alert-danger" role="alert">
                                    @foreach ($errors->all() as $error)
                                    {{$error}}
                                    @endforeach
                                </div>
                                @endif
            
                                <form action="{{route('calificaciones.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
            
                                    <input type="file" name="import_file" />
            
                                    <button class="btn btn-primary" type="submit">Importar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $notas->links() !!}
            </div>
        </div>
    </div>
@endsection
