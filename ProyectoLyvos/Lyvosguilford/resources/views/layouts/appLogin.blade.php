<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LYVOS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <style>
        body{
            background-color: rgb(28, 167, 121);
            margin: 0%;
            margin-top: 0%;
        }
        a{
            color: white;
        }
        
    </style>
    
    <div id="app">
        <nav class="navbar">
            <div class="container-fluid">
              <a class="navbar" href="/" style="margin-left: 7%" >
                <img src="img/LYVOS.png"  alt="Sin logo" width="40" height="40" class="d-inline-block align-text-top"  />
                
              </a>
    
              <ul class="nav justify-content-center">
                
                <li class="nav-item">
                  <a class="nav-link"  href="/">INICIO</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CIBERLYVOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">PLANES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">PREGUNTAS FRECUENTES</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">CONTACTENOS</a>
                </li>
                <li class="nav-item">
                  @if (Route::has('login'))
                  <div class="top-right links">
                      @auth
                          <a class="nav-link" style="color: rgb(240, 247, 243) ;font-weight: bold;
                          " href="{{ url('/home') }}">HOME</a>
                          
                      @else
                          <a class="nav-link" href="{{ route('login') }}">INGRESAR</a>
    
                         
                          
                      @endauth
                  </div>
              @endif
                </li>
              </ul>
            </div>
          </nav>
      

        <main class="py-4" style="margin-top: 6%">
            @yield('content')
        </main>
    </div>
</body>
</html>
