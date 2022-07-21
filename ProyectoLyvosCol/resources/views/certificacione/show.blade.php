<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
        
        

        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.4;
            color: #313944;
            background: #F6FBFF;
            
            
        }

        body p {
            margin: 0
        }

       
       
        #selection{

            margin-top: 5%;
            margin-left: 200px;
            width: 900px;
            height: 900px;
            align-content: center;
            background: #dcf3e4;
            
        }
    </style>

</head>

<body>
    <div id="botones">
        <a class="btn btn-primary" href="{{ route('certificaciones.index') }}"> Back</a>
        <a href="javascript:imprSelec('seleccion')">Imprimir texto</a>
    </div>

    <div id="selection" class="container-fluid">
        
        

    </div>



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