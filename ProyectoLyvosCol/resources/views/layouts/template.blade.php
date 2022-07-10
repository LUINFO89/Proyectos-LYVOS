<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Software Lyvos Colombia

  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('./assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('./assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          LYVOS COLOMBIA
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="{{ route('home') }}">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
            <a href="{{ route('grados.index') }}">
              <i class="nc-icon nc-badge"></i>
              <p>Grados</p>
            </a>
          </li>
          <li class="active ">
            <a href="{{ route('alumnos.index') }}">
              <i class="nc-icon nc-circle-10"></i>
              <p>Alumnos</p>
            </a>
          </li>
          <li class="active ">
            <a href="{{ route('solicitudes.index') }}">
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Solicitudes</p>
            </a>
          </li>
          <li class="active ">
            <a href="{{ route('certificaciones.index') }}">
              <i class="nc-icon nc-hat-3"></i>
              <p>Certificaciones</p>
            </a>
          </li>
          <li class="active ">
            <a href="{{ route('certificaciones.index') }}">
              <i class="nc-icon nc-paper"></i>
              <p>Informes</p>
            </a>
          </li>
          <li class="active ">
            <a href="{{ route('certificaciones.index') }}">
              <i class="nc-icon nc-settings"></i>
              <p>Perfil</p>
            </a>
          </li>
          <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
            <div class="container-fluid">
              <div class="row m-2">
               
                <div class="credits ml-auto">
                  <span class="copyright">
                     © 2022, made by Developer: Luis Hernando Soto Mesa
                  </span>
                </div>
              </div>
            </div>
          </footer>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh; ">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <marquee behavior="" direction=""> <a class="navbar-brand" href="javascript:;">Licenciado: Colegio
                Psicopedagogico Guilford </a>
            </marquee>
          </div>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">

            @guest
            @if (Route::has('login'))
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

            @endif

            @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

            @endif
            @else
            <a id="navbar" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false" v-pre>
              
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>

            @endguest


            <ul class="navbar-nav">

              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('home') }}" id="navbarDropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-user"> </i>
                  {{ Auth::user()->name }}

                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>


            </ul>

          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-auto" style="margin-top: 8% ; ">

        @yield('content')

      </div>



   
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>