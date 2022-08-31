@extends('layouts.informes')

@section('content')
<h1 style="text-align: center; margin-left:%"> 

    <h5 class=" font-weight-bold"> Listado general de asignaturas </h5> </h1>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        
                        <th>Nombre Asignatura</th>
                        <th>Creditos</th>
                        <th>Profesor encargado</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asignaturas as $asignatura)
                        <tr>
                            
                            <td>{{ $asignatura->nombre_asignatura }}</td>
                            <td>{{ $asignatura->creditos }}</td>
                            <td>{{ $asignatura->profesore->nombre_profesores }}</td>

                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

   





@endsection