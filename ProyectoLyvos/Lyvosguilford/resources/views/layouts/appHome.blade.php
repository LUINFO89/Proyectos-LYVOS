<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LYVOS</title>
    <!--- Icon Font Awason --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrapp.min.css') }}" rel="stylesheet">
     <!-- Datepicker Files -->
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
    <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-standalone.css')}}">
    <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>




</head>
<body>
    

    <div class="container-fluid">
        <div class="row">

            <!-- Menú de navegación -->
            <nav class="col-lg-3 col-3 navBar bg-green vh-100 position-fixed p-lg-3">
                <img src="{{ asset('img/logo.jpg') }}"  id="logocol" alt="logo" class="img-fluid mx-auto d-block w-50 mt-lg-2 mb-lg-4">
                <hr class="border border-white">

                <ul class="nav flex-column" >
                    <li class="nav-item ">
                        <a class="nav-link " href="/">
                            <i class="fas fa-home"></i>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        
                        <a class="nav-link" href="{{ route('servicios.index') }}">
                            <i class="fas fa-address-book"></i>
                            {{ __('Servicios') }}</a>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('solicitudes.index') }}">
                            <i class="fas fa-align-justify"></i>
                            {{ __('Solicitudes') }}
                        </a>
                    </li>

                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('facturas.index') }}">
                            <i class="fas fa-coins"></i>

                            {{ __('Facturacion') }}</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clientes.index') }}">
                            <i class="fas fa-child"></i>
                            {{ __('Estudiantes') }}</a>
                    </li>
                    <a class="nav-link" href="{{ route('clientes.index') }}">
                        <i class="fas fa-align-center"></i>
                        {{ __('Informes') }}</a>
                </li>
                    <li class="nav-item">
                        
                        <a class="nav-link" href="{{ route('register') }}">
                            <i class="fas fa-address-book"></i>
                            {{ __('Usuarios') }}</a>
    
                    </li>
                    
                   

                   
                        
                    

                </ul>
                <hr class="border border-white">
                <li class="nav-link">
                    <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}</a>   
                </li>
                <form id="logout-form" class="nav-link"  action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>

            </nav>

            
            <!-- Fin menú de navegación -->

            <!-- Cabecera de la página -->
            <header class="col-lg-9 text-white p-0 fixed-top " style="margin-left: 25%;">
                <div class="header-content bg-green ms-lg-3 p-lg-2 text-end">
                    <div class="me-lg-5 ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                           
                        @else
                        
                            <li class="nav-item dropdown navbar-nav ml-auto">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Usuario: {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-center" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        
                    </div>
                </div>
            </header>
            <!-- Fin Cabecera de la página -->
            <main class="col-lg-9 col-12 mt-lg-5  p-lg-0" style="margin-left: 25%;">
                @yield('content')
            </main>

   
        </div>
    </div>
</body>
</html>
