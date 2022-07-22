@extends('layouts.template')

@section('content')

<div class="content">
    <div class="row m-0" >
        <div class="col-md-12">
            <h3 class="description">{{ __('Dashboard') }}</h3>
            <div class="card">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="container text-center">
                        <div class="row">
                          <div class="col">
                            Column
                            <div class="card border-danger mx-sm-1 p3">
                            
                                <div class="text-danger text-center mt-3"><h4>Usuarios Creados: {{ Auth::user()->count() }}</h4></div>
                                <a href="{{ route('usuarios.index') }}" >
                                    <i class="nc-icon nc-satisfied"></i>
                                    <p>Usuarios</p>
                                  </a>
                            </div>
                          </div>
                          <div class="col">
                            Column
                            <div class="card border-danger mx-sm-1 p3">
                            
                                <div class="text-danger text-center mt-3"><h4> Grados </h4></div>
                                    <a href="{{ route('grados.index') }}" >
                                      <i class="nc-icon nc-badge"></i>
                                      <p>Grados</p>
                                    </a>
                                  
                            </div>
                          </div>
                          <div class="col">
                            Column
                            <div class="card border-danger mx-sm-1 p3">
                            
                                <div class="text-danger text-center mt-3"><h4>Solicitudes </h4></div>
                                <a href="{{ route('solicitudes.index') }}" >
                                    <i class="nc-icon nc-bullet-list-67"></i>
                                    <p>Solicitudes</p>
                                  </a>
    
                            </div>
                          </div>
                        </div>
                      </div>
                   

                    {{ __('You are logged in!') }}
                </div>
            </div>

        </div>
    </div>
</div>


@endsection