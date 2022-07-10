<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombreGrado') }}
            {{ Form::text('nombreGrado', $grado->nombreGrado, ['class' => 'form-control' . ($errors->has('nombreGrado') ? ' is-invalid' : ''), 'placeholder' => 'Nombregrado']) }}
            {!! $errors->first('nombreGrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('precioGrado') }}
            {{ Form::text('precioGrado', $grado->precioGrado, ['class' => 'form-control' . ($errors->has('precioGrado') ? ' is-invalid' : ''), 'placeholder' => 'Preciogrado']) }}
            {!! $errors->first('precioGrado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>