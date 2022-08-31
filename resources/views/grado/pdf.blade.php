@extends('layouts.informes')

@section('content')
<h1 style="text-align: center; margin-left:%"> 

    <h5 class=" font-weight-bold"> Informe total de grados</h5> </h1>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>


                        <th>Nombre</th>
                        <th>Precio</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($grados as $grado)
                    <tr>


                        <td>{{ $grado->nombreGrado }}</td>
                        <td>{{ $grado->precioGrado }}</td>


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection