<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('tipoIdentificacionSolicitud') }}
            {{ Form::select('tipoIdentificacionSolicitud',['Seleccione','CC','RC','TI','TE'],0, ['class' => 'form-control' ]) }}
            {!! $errors->first('tipoIdentificacionSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('documentoIdentidadSolicitud') }}
            {{ Form::text('documentoIdentidadSolicitud', $solicitude->documentoIdentidadSolicitud, ['class' => 'form-control' . ($errors->has('documentoIdentidadSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Documentoidentidadsolicitud']) }}
            {!! $errors->first('documentoIdentidadSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombresSolicitud') }}
            {{ Form::text('nombresSolicitud', $solicitude->nombresSolicitud, ['class' => 'form-control' . ($errors->has('nombresSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Nombressolicitud']) }}
            {!! $errors->first('nombresSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('primerApellidoSolicitud') }}
            {{ Form::text('primerApellidoSolicitud', $solicitude->primerApellidoSolicitud, ['class' => 'form-control' . ($errors->has('primerApellidoSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Primerapellidosolicitud']) }}
            {!! $errors->first('primerApellidoSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('segundoApellidoSolicitud') }}
            {{ Form::text('segundoApellidoSolicitud', $solicitude->segundoApellidoSolicitud, ['class' => 'form-control' . ($errors->has('segundoApellidoSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Segundoapellidosolicitud']) }}
            {!! $errors->first('segundoApellidoSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correoElectronicoSolicitud') }}
            {{ Form::text('correoElectronicoSolicitud', $solicitude->correoElectronicoSolicitud, ['class' => 'form-control' . ($errors->has('correoElectronicoSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Correoelectronicosolicitud']) }}
            {!! $errors->first('correoElectronicoSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipodeCertificacionSolicitus') }}
            {{ Form::select('tipodeCertificacionSolicitus',['Certificado de estudios', 'Certificado de Notas','Boletines','Paz y salvo'],0, ['class' => 'form-control'. ($errors->has('tipodeCertificacionSolicitus') ? ' is-invalid' : '') ]    ) }}
            {!! $errors->first('tipodeCertificacionSolicitus', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('anoCertificacionSolicitud') }}
            {{ Form::text('anoCertificacionSolicitud', $solicitude->anoCertificacionSolicitud, ['class' => 'form-control' . ($errors->has('anoCertificacionSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Anocertificacionsolicitud']) }}
            {!! $errors->first('anoCertificacionSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gradoSolicitud') }}
            {{ Form::text('gradoSolicitud', $solicitude->gradoSolicitud, ['class' => 'form-control' . ($errors->has('gradoSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Gradosolicitud']) }}
            {!! $errors->first('gradoSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('otrosSolicitud') }}
            {{ Form::text('otrosSolicitud', $solicitude->otrosSolicitud, ['class' => 'form-control' . ($errors->has('otrosSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Otrossolicitud']) }}
            {!! $errors->first('otrosSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comentariosSolicitud') }}
            {{ Form::text('comentariosSolicitud', $solicitude->comentariosSolicitud, ['class' => 'form-control' . ($errors->has('comentariosSolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Comentariossolicitud']) }}
            {!! $errors->first('comentariosSolicitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descargarRecibo') }}
            {{ Form::text('descargarRecibo', $solicitude->descargarRecibo, ['class' => 'form-control' . ($errors->has('descargarRecibo') ? ' is-invalid' : ''), 'placeholder' => 'Descargarrecibo']) }}
            {!! $errors->first('descargarRecibo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargarRecibo') }}
            {{ Form::text('cargarRecibo', $solicitude->cargarRecibo, ['class' => 'form-control' . ($errors->has('cargarRecibo') ? ' is-invalid' : ''), 'placeholder' => 'Cargarrecibo']) }}
            {!! $errors->first('cargarRecibo', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>