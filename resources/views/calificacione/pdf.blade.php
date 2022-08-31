@extends('layouts.informes')

@section('content')
<h1 style="text-align: center; margin-left:%"> 

    <h5 class=" font-weight-bold"> Listado general de calificaciones </h5> </h1>

   
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        
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

                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
    </div>





@endsection