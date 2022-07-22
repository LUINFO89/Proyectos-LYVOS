<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $certificacione->tipodeCertificaciones }} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;

            font-size: 18px;
            line-height: 1.4;
            color: #313944;
            background: #F6FBFF;


        }

        body p {
            margin: 0
        }



        #selection {

            margin-top: 5%;
            margin-left: 200px;
            width: 900px;
            height: 900px;
            align-content: center;
            background: #dcf3e4;
            align-content: center;


        }





        #header {
            padding: 20px;
            margin: 10px;
            display: flex;
            flex-flow: column;
            text-align: justify;
        }

        #header-img {
            max-width: 40%;
            height: auto;
            margin: 0 auto;
        }


        .section .primera {
            list-style: none;
            margin: 40px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background: #e1edf09f;
            flex: 3 1 40%;
            order: 2;
            color: black;
            display: flex;
            flex-flow: column;
            align-content: center;

        }

        footer {
            margin-top: 20%;
        }

        .section div h2 {}

        img {

            width: 30%;
            height: 50%;
            margin: 0 auto;
            padding: 10px;

        }
    </style>

</head>

<body>



    <header id="header">
        <div id="botones">
            <a class="btn btn-primary" href="{{ route('certificaciones.index') }}"> Back</a>
            <a href="javascript:imprSelec('seleccion')">Imprimir texto</a>
        </div>
    </header>



    <section class="section" id="seleccion">
        <div id="primera">
            <h2 id="titulo">GIMNASIO PSICOPEDAGOGICO GUILFORD</h2>
            <h5>NIT:99999999-9</h5>
            <h5>"La creatividad e inteligencia como fortalecedoras del conocimiento"</h5>
            <br>
            <br>
            <br>

            <h2>CERTIFICA</h2>
            <br>
            <br><br>
            <p> <strong>Que:</strong>
                {{ $certificacione->nombresCertificaciones }}
                {{ $certificacione->primerApellidoCertificaciones }}
                {{$certificacione->segundoApellidoCertificaciones }} identificado(a) con
                {{$certificacione->tipoIdentificacionCertificaciones}}Numero:
                {{$certificacione->documentoIdentidadAlumno_id}} de la ciudad de: ______, <br>
                Realizo y aprobo el curso de:
                {{$certificacione->certificacionesGrado_id}} en el año lectivo
                {{$certificacione->anoCertificacionCertificaciones}}
                en nuestra institución <br>
                educativa se caracterizó por su buen comportamiento y cumplimiento <br>
                del Manual de Convivencia del GPG.


            </p>


            <div>
                <br>
                <br>
                <br>
                <br>

                La presente se expide a solicitud del interesado(a). Dada en Bogotá <br>
                D.C a los ( 28) días del mes de Enero del año dos mil veintidós.

                <br><br><br>
                <div>
                    <img src="https://peibegrafia.com/wp-content/uploads/2017/10/2-firma1.jpg" alt="firma" srcset="">
                    <h6>Rectora:Luz Mila Acosta</h6>
                </div>

            </div>

            <div>
                Este documento es válido con la firma autenticada en la notaria 47. <br>
                Carrera 112B N. 142-64 Teléfono 7498907 7047792 cel 3212111705 Bogotá D.C.
            </div>
        </div>

    </section>



</body>

</html>


<script>
    function imprimirElemento() {
        window.print();
}

function imprSelec(nombre) {
	  var ficha = document.getElementById(nombre);
	  var ventimp = window.open(' ', 'popimpr');
	  ventimp.document.write( ficha.innerHTML );
	  ventimp.document.close();
	  ventimp.print( );
	  ventimp.close();
	}

</script>