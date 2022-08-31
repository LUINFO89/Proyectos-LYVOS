<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_identidad_alumno') }}
            {{ Form::text('id_identidad_alumno', $calificacione->id_identidad_alumno, ['class' => 'form-control' . ($errors->has('id_identidad_alumno') ? ' is-invalid' : ''), 'placeholder' => 'Id Identidad Alumno']) }}
            {!! $errors->first('id_identidad_alumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('alumno') }}
            {{ Form::text('alumno', $calificacione->alumno, ['class' => 'form-control' . ($errors->has('alumno') ? ' is-invalid' : ''), 'placeholder' => 'Alumno']) }}
            {!! $errors->first('alumno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_asignatura_estudiante') }}
            {{ Form::text('id_asignatura_estudiante', $calificacione->id_asignatura_estudiante, ['class' => 'form-control' . ($errors->has('id_asignatura_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Id Asignatura Estudiante']) }}
            {!! $errors->first('id_asignatura_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia') }}
            {{ Form::text('materia', $calificacione->materia, ['class' => 'form-control' . ($errors->has('materia') ? ' is-invalid' : ''), 'placeholder' => 'Materia']) }}
            {!! $errors->first('materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota1') }}
            {{ Form::text('nota1', $calificacione->nota1, ['class' => 'form-control' . ($errors->has('nota1') ? ' is-invalid' : ''), 'placeholder' => 'Nota1']) }}
            {!! $errors->first('nota1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota2') }}
            {{ Form::text('nota2', $calificacione->nota2, ['class' => 'form-control' . ($errors->has('nota2') ? ' is-invalid' : ''), 'placeholder' => 'Nota2']) }}
            {!! $errors->first('nota2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota3') }}
            {{ Form::text('nota3', $calificacione->nota3, ['class' => 'form-control' . ($errors->has('nota3') ? ' is-invalid' : ''), 'placeholder' => 'Nota3']) }}
            {!! $errors->first('nota3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota4') }}
            {{ Form::text('nota4', $calificacione->nota4, ['class' => 'form-control' . ($errors->has('nota4') ? ' is-invalid' : ''), 'placeholder' => 'Nota4']) }}
            {!! $errors->first('nota4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota_final') }}
            {{ Form::text('nota_final', $calificacione->nota_final, ['class' => 'form-control' . ($errors->has('nota_final') ? ' is-invalid' : ''), 'placeholder' => 'Nota Final']) }}
            {!! $errors->first('nota_final', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_curso_estudiante') }}
            {{ Form::text('id_curso_estudiante', $calificacione->id_curso_estudiante, ['class' => 'form-control' . ($errors->has('id_curso_estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Id Curso Estudiante']) }}
            {!! $errors->first('id_curso_estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>