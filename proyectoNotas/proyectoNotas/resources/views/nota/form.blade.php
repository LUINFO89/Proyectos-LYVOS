<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('estudiante_id') }}
            {{ Form::select('estudiante_id',$estudiante, $nota->estudiante_id, ['class' => 'form-control' . ($errors->has('estudiante_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudiante Id']) }}
            {!! $errors->first('estudiante_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('curso_id') }}
            {{ Form::select('curso_id', $cursos, $nota->curso_id, ['class' => 'form-control' . ($errors->has('curso_id') ? ' is-invalid' : ''), 'placeholder' => 'Curso Id']) }}
            {!! $errors->first('curso_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota1') }}
            {{ Form::text('nota1', $nota->nota1, ['class' => 'form-control' . ($errors->has('nota1') ? ' is-invalid' : ''), 'placeholder' => 'Nota1']) }}
            {!! $errors->first('nota1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota2') }}
            {{ Form::text('nota2', $nota->nota2, ['class' => 'form-control' . ($errors->has('nota2') ? ' is-invalid' : ''), 'placeholder' => 'Nota2']) }}
            {!! $errors->first('nota2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota3') }}
            {{ Form::text('nota3', $nota->nota3, ['class' => 'form-control' . ($errors->has('nota3') ? ' is-invalid' : ''), 'placeholder' => 'Nota3']) }}
            {!! $errors->first('nota3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota4') }}
            {{ Form::text('nota4', $nota->nota4, ['class' => 'form-control' . ($errors->has('nota4') ? ' is-invalid' : ''), 'placeholder' => 'Nota4']) }}
            {!! $errors->first('nota4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nota5') }}
            {{ Form::text('nota5', $nota->nota5, ['class' => 'form-control' . ($errors->has('nota5') ? ' is-invalid' : ''), 'placeholder' => 'Nota5']) }}
            {!! $errors->first('nota5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Evaluacion Final') }}
            {{ Form::text('notafinal', $nota->notafinal, ['class' => 'form-control' . ($errors->has('notafinal') ? ' is-invalid' : ''), 'placeholder' => 'Notafinal']) }}
            {!! $errors->first('notafinal', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        


    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>