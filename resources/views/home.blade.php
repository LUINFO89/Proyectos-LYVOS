@extends('layouts.template')

@section('content')

<div class="content">
  
    <div class="row m-1" >
        <div class="col-md-12">
            <div class="card" style="margin-top: 10%">

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    
                      <div class="content">
                        <div class="row">
                          <!-- Line 1-->
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-body ">
                                <div class="row">
                                  <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                      <i class="nc-icon nc-satisfied"></i>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-8">
                                    <div class="numbers">
                                      <p class="card-category">Usuarios</p>
                                      <p class="card-title"><a href="{{ route('usuarios.index') }}" >
                                        <p>{{ Auth::user()->count() }}</p>
                                      </a><p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                  <i class="fa fa-refresh"></i>
                                  Actualizado ahora 
                                </div>
                              </div>
                            </div>

                          </div>
                          <!-- Line 1-->
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-body ">
                                <div class="row">
                                  <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                      <i class="nc-icon nc-circle-10"></i>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-8">
                                    <div class="numbers">
                                      <p class="card-category">Estudiantes</p>
                                      <p class="card-title">
                                      <a href="{{ route('alumnos.index') }}" > 700
                                        </a>
                                        <p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                  <i class="fa fa-calendar-o"></i>
                                  Último día
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-body ">
                                <div class="row">
                                  <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                      <i class="nc-icon nc-badge"></i>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-8">
                                    <div class="numbers">
                                      <p class="card-category">Grados Academicos</p>
                                      <p class="card-title">23<p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                  <i class="fa fa-clock-o"></i>
                                  En la última hora
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                              <div class="card-body ">
                                <div class="row">
                                  <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                                    </div>
                                  </div>
                                  <div class="col-7 col-md-8">
                                    <div class="numbers">
                                      <p class="card-category">Seguidores en redes sociales</p>
                                      <p class="card-title">+45K<p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                  <i class="fa fa-refresh"></i>
                                  En la última hora
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                   

                    
                </div>
            </div>

        </div>
    </div>
</div>


@endsection