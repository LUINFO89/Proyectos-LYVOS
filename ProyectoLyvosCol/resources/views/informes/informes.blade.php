@extends('layouts.template')

@section('template_title')
Solicitude
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card" style="display: center;  align-items: center;">


                <div class="card-header" style="display: center;  align-items: center;">

                    <div style="display: center;  align-items: center;">

                        <span id="card_title" style="display:flex;  align-items: center; margin:5%  ;font-size: 30px; ">
                            {{ __('TIPO DE INFORME') }}
                        </span>
                        <!-- Example single danger button -->
                        <div class="dropdown">
                            <button class="btn btn-secundary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 800px">
                                Seleccione.... </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <a href="{{ route('download-pdf') }}" class="dropdown-item" data-placement="left">
                                    {{ __('1. Informe de Estudiantes Activos') }}
                                </a>
                                <a href="{{ route('download-pdf-grados') }}" class="dropdown-item"
                                    data-placement="left">
                                    {{ __('2. Informe Total de Grados') }}
                                </a>
                                <a href="{{ route('download-pdf-solicitudes') }}" class="dropdown-item"
                                    data-placement="left">
                                    {{ __('3. Informe Total de Solicitudes ') }}
                                </a>
                                <a href="{{ route('download-pdf-certificaciones') }}" class="dropdown-item" data-placement="left">
                                    {{ __('4. Informe total de certificaciones ') }}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection