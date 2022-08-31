@extends('layouts.template')

@section('template_title')
    {{ $calificacione->name ?? 'Show Calificacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Calificacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('calificaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Identidad Alumno:</strong>
                            {{ $calificacione->id_identidad_alumno }}
                        </div>
                        <div class="form-group">
                            <strong>Alumno:</strong>
                            {{ $calificacione->alumno }}
                        </div>
                        <div class="form-group">
                            <strong>Id Asignatura Estudiante:</strong>
                            {{ $calificacione->id_asignatura_estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $calificacione->materia }}
                        </div>
                        <div class="form-group">
                            <strong>Nota1:</strong>
                            {{ $calificacione->nota1 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota2:</strong>
                            {{ $calificacione->nota2 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota3:</strong>
                            {{ $calificacione->nota3 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota4:</strong>
                            {{ $calificacione->nota4 }}
                        </div>
                        <div class="form-group">
                            <strong>Nota Final:</strong>
                            {{ $calificacione->nota_final }}
                        </div>
                        <div class="form-group">
                            <strong>Id Curso Estudiante:</strong>
                            {{ $calificacione->id_curso_estudiante }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
