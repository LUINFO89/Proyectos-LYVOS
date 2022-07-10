<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('tipoIdentificacionCertificaciones') }}

            {{ Form::select('tipoIdentificacionCertificaciones',['Seleccione','CC','RC','TI','TE'],0, ['class' =>
            'form-control'. ($errors->has('tipoIdentificacionCertificaciones') ? ' is-invalid' : '') ]) }}

            {!! $errors->first('tipoIdentificacionCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('documentoIdentidadAlumno_id') }}
            {{ Form::select('documentoIdentidadAlumno_id', $alumnos,$certificacione->documentoIdentidadAlumno_id,
            ['class' => 'form-control' . ($errors->has('documentoIdentidadAlumno_id') ? ' is-invalid' : ''),
            'placeholder' => 'Documentoidentidadalumno Id']) }}
            {!! $errors->first('documentoIdentidadAlumno_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombresCertificaciones') }}
            {{ Form::text('nombresCertificaciones', $certificacione->nombresCertificaciones, ['class' => 'form-control'
            . ($errors->has('nombresCertificaciones') ? ' is-invalid' : ''), 'placeholder' => 'Nombrescertificaciones'])
            }}
            {!! $errors->first('nombresCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primerApellidoCertificaciones') }}
            {{ Form::text('primerApellidoCertificaciones', $certificacione->primerApellidoCertificaciones, ['class' =>
            'form-control' . ($errors->has('primerApellidoCertificaciones') ? ' is-invalid' : ''), 'placeholder' =>
            'Primerapellidocertificaciones']) }}
            {!! $errors->first('primerApellidoCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundoApellidoCertificaciones') }}
            {{ Form::text('segundoApellidoCertificaciones', $certificacione->segundoApellidoCertificaciones, ['class' =>
            'form-control' . ($errors->has('segundoApellidoCertificaciones') ? ' is-invalid' : ''), 'placeholder' =>
            'Segundoapellidocertificaciones']) }}
            {!! $errors->first('segundoApellidoCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correoElectronicoCertificaciones') }}
            {{ Form::text('correoElectronicoCertificaciones', $certificacione->correoElectronicoCertificaciones,
            ['class' => 'form-control' . ($errors->has('correoElectronicoCertificaciones') ? ' is-invalid' : ''),
            'placeholder' => 'Correoelectronicocertificaciones']) }}
            {!! $errors->first('correoElectronicoCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipodeCertificaciones') }}
            {{ Form::select('tipodeCertificaciones',['Certificado de estudios', 'Certificado de Notas','Boletines','Paz y salvo'],0, ['class' => 'form-control'. ($errors->has('tipodeCertificaciones') ? ' is-invalid' : '') ]    ) }}
            {!! $errors->first('tipodeCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anoCertificacionCertificaciones') }}
            {{ Form::text('anoCertificacionCertificaciones', $certificacione->anoCertificacionCertificaciones, ['class'
            => 'form-control' . ($errors->has('anoCertificacionCertificaciones') ? ' is-invalid' : ''), 'placeholder' =>
            'Anocertificacioncertificaciones']) }}
            {!! $errors->first('anoCertificacionCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('certificacionesGrado_id') }}
            {{ Form::select('certificacionesGrado_id',$grado, $certificacione->certificacionesGrado_id, ['class' =>
            'form-control' . ($errors->has('certificacionesGrado_id') ? ' is-invalid' : ''), 'placeholder' =>
            'Certificacionesgrado Id']) }}
            {!! $errors->first('certificacionesGrado_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentariosCertificaciones') }}
            {{ Form::text('comentariosCertificaciones', $certificacione->comentariosCertificaciones, ['class' =>
            'form-control' . ($errors->has('comentariosCertificaciones') ? ' is-invalid' : ''), 'placeholder' =>
            'Comentarioscertificaciones']) }}
            {!! $errors->first('comentariosCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descargarReciboCertificaciones') }}
            {{ Form::text('descargarReciboCertificaciones', $certificacione->descargarReciboCertificaciones, ['class' =>
            'form-control' . ($errors->has('descargarReciboCertificaciones') ? ' is-invalid' : ''), 'placeholder' =>
            'Descargarrecibocertificaciones']) }}
            {!! $errors->first('descargarReciboCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargarReciboCertificaciones') }}
            {{ Form::text('cargarReciboCertificaciones', $certificacione->cargarReciboCertificaciones, ['class' =>
            'form-control' . ($errors->has('cargarReciboCertificaciones') ? ' is-invalid' : ''), 'placeholder' =>
            'Cargarrecibocertificaciones']) }}
            {!! $errors->first('cargarReciboCertificaciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>