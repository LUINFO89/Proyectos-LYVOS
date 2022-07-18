<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 20px;
        }
    </style>

</head>

<body>
    <div class="card-body">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-left">
                        <span class="card-title">Show Certificacione</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary" href="{{ route('certificaciones.index') }}"> Back</a>
                    </div>
                </div>

                <div class="card-body">
                    
                    <div class="form-group">
                        <strong>Tipoidentificacioncertificaciones:</strong>
                        {{ $certificaciones->tipoIdentificacionCertificaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Documentoidentidadalumno Id:</strong>
                        {{ $certificacione->documentoIdentidadAlumno_id }}
                    </div>
                    <div class="form-group">
                        <strong>Nombrescertificaciones:</strong>
                        {{ $certificacione->nombresCertificaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Primerapellidocertificaciones:</strong>
                        {{ $certificacione->primerApellidoCertificaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Segundoapellidocertificaciones:</strong>
                        {{ $certificacione->segundoApellidoCertificaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Correoelectronicocertificaciones:</strong>
                        {{ $certificacione->correoElectronicoCertificaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Tipodecertificaciones:</strong>
                        {{ $certificacione->tipodeCertificaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Anocertificacioncertificaciones:</strong>
                        {{ $certificacione->anoCertificacionCertificaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Certificacionesgrado Id:</strong>
                        {{ $certificacione->certificacionesGrado_id }}
                    </div>
                    <div class="form-group">
                        <strong>Comentarioscertificaciones:</strong>
                        {{ $certificacione->comentariosCertificaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Descargarrecibocertificaciones:</strong>
                        {{ $certificacione->descargarReciboCertificaciones }}
                    </div>
                    <div class="form-group">
                        <strong>Cargarrecibocertificaciones:</strong>
                        {{ $certificacione->cargarReciboCertificaciones }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>