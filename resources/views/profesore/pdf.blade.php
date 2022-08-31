@extends('layouts.informes')

@section('content')
<h1 style="text-align: center; margin-left:%"> 

    <h5 class=" font-weight-bold"> Informe Profesores</h5> </h1>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        
                        <th>Identificación:</th>
                        <th>Nombres:</th>
                        <th>Telefono:</th>
                        <th>Correo:</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profesores as $profesore)
                        <tr>
                            
                            <td>{{ $profesore->identificacion_profesores }}</td>
                            <td>{{ $profesore->nombre_profesores }}</td>
                            <td>{{ $profesore->nombre_telefono }}</td>
                            <td>{{ $profesore->nombre_correo }}</td>

                            <td>
                               
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>





@endsection
