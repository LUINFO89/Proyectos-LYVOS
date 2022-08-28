@extends('layouts.informes')

@section('content')
<h1 style="text-align: center; margin-left:%"> 

    <h5 class=" font-weight-bold"> Informe Estudiantes</h5> </h1>

<table class="table table-bordered mt-1">
    <thead >
        <tr>
            
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

        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
            <tr>
                
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

                
            </tr>
        @endforeach
    </tbody>
</table>



@endsection
       