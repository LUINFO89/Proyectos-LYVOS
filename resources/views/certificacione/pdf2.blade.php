@extends('layouts.informes')

@section('content')
<h1 style="text-align: center; margin-left:%"> 

    <h5 class=" font-weight-bold"> Listado general de certificaciones </h5> </h1>



    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                       
                    
                        <th>Nombres</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        
                        <th>Tipo Certificacion</th>
                      
                        <th>Programa o curso Id</th>
                        <th>Comentarios</th>
                     
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certificaciones as $certificacione)
                    <tr>

                      
                        <td>{{ $certificacione->nombresCertificaciones }}</td>
                        <td>{{ $certificacione->primerApellidoCertificaciones }}</td>
                        <td>{{ $certificacione->segundoApellidoCertificaciones }}</td>
                   
                        <td>{{ $certificacione->tipodeCertificaciones }}</td>
                     
                        <td>{{ $certificacione->certificacionesGrado_id }}</td>
                        <td>{{ $certificacione->comentariosCertificaciones }}</td>
                  
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endsection
