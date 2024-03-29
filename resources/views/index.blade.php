<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <title>Gimnasio Psicopedagogico Guilford</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="{{ asset('img/favicon.ico')}}" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Flaticon Font -->

  <link href="{{ asset('lib/flaticon/font/flaticon.css')}}" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="{{ asset ('lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet') }}" rel="stylesheet" />
  <link href="{{ asset ('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet" />
</head>

<body  style="background-color:rgb(229, 240, 220)">
  <!-- Navbar Start -->
  <div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
      <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
        <img src="../assets/img/logo.jpg"" width="80px" alt="" style="border-radius: 100%">
        <!--i class="flaticon-043-teddy-bear"></i-->
       
      
      </a>
      
      <span class="text" style="color: #007965 " >Colegio Psicopedagógico Guilford</span>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="index.html" class="nav-item nav-link active">Inicio</a>
          <a href="#acerca" class="nav-item nav-link">Acerca de</a>
          <a href="#profesores" class="nav-item nav-link">Profesores</a>
          <a href="#precios" class="nav-item nav-link">Precios</a>

          <a href="#contacto" class="nav-item nav-link">Contacto</a>
        </div>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          @auth
          <!--a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a-->
          <a href="{{ url('/home') }}" style="background-color: #007965" class="btn btn-primary px-4">Inicio</a>

          @else
          <!--a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a-->
          <a href="{{ route('login') }}" style="background-color: #007965"class="btn btn-primary px-4">Iniciar Sesión</a>

          @if (Route::has('register'))
          <!--a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a-->
          <!--a href="{{ route('register') }}" style="background-color: #007965"class="btn btn-primary px-4">Registrarse</a-->

          @endif
          @endauth
        </div>
        @endif
      </div>
    </nav>
  </div>
  <!-- Navbar End -->

  <!-- Header Start -->
  <div class="container-fluid bg- px-0 px-md-5 mb-5" style="background-color: #007965 "  >
    <div class="row align-items-center px-3">
      <div class="col-lg-6 text-center text-lg-left">
        <h4 class="text-white mb-4 mt-5 mt-lg-0">Centro de Aprendizaje para Niños</h4>
        <h1 class="display-3 font-weight-bold text-white">
          CEATIVIDAD INTELIGENCIA CONOCIMIENTO </h1>
        <p class="text-white mb-4">
          El Centro Psicopedagógico Guilford, es un Colegio en el que se busca formar 
          ciudadanos con principios humanos, inculcando valores como la alegría, 
          el estudio y la piedad, en un ambiente de familia.
        </p>
        <a href="" class="btn btn-secondary mt-1 py-3 px-5">Contactanos </a>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <img class="img-fluid mt-5" src="img/header.png" alt="" />
      </div>
    </div>
  </div>
  <!-- Header End -->

 

  <!-- About Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img class="img-fluid rounded mb-5 mb-lg-0" src="https://colegiomargaritab.com/archivos2022/identidad/identidad04.JPG" alt="" />
        </div>
        <div class="col-lg-7">
          <p class="section-title pr-5">
            <span class="pr-2" id="acerca">Acerca de nosotros</span>
          </p>
          <h1 class="mb-4">La mejor escuela para tus hijos</h1>
          <p>
            Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
            dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
            Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
            dolor
          </p>
          <div class="row pt-2 pb-4">
            <div class="col-6 col-md-4">
              <img class="img-fluid rounded" src="https://colegiomargaritab.com/wp-content/uploads/2022/06/identidad11.jpg" alt="" />
            </div>
            <div class="col-6 col-md-8">
              <ul class="list-inline m-0">
                <li class="py-2 border-top border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Modelo contructivista
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i>Proyectos STEAM
                </li>
                <li class="py-2 border-bottom">
                  <i class="fa fa-check text-primary mr-3"></i> Pensamiento Critico
                </li>
              </ul>
            </div>
          </div>
          <a href="" class="btn btn-primary mt-2 py-2 px-4">Learn More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Class Start -->
  <div class="container-fluid pt-5">
    <div class="container" >
      <div class="text-center pb-2">
        <p class="section-title px-5">
          <span class="px-2" id="precios">Inversión</span>
        </p>
        <h1 class="mb-4">Clases para tus hijos</h1>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="img/class-1.jpg" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">Clase de dibujo</h4>
              <p class="card-text">
                Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                ipsum duo et no et, ipsum ipsum erat duo amet clita duo
              </p>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Age of Kids</strong>
                </div>
                <div class="col-6 py-1">3 - 6 Years</div>
              </div>
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Total Seats</strong>
                </div>
                <div class="col-6 py-1">40 Seats</div>
              </div>
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Class Time</strong>
                </div>
                <div class="col-6 py-1">08:00 - 10:00</div>
              </div>
              <div class="row">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Tution Fee</strong>
                </div>
                <div class="col-6 py-1">$290 / Month</div>
              </div>
            </div>
            <a href="" class="btn btn-primary px-4 mx-auto mb-4">Únete ahora</a>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="img/class-2.jpg" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">Aprendizaje de idiomas</h4>
              <p class="card-text">
                Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                ipsum duo et no et, ipsum ipsum erat duo amet clita duo
              </p>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Age of Kids</strong>
                </div>
                <div class="col-6 py-1">3 - 6 Years</div>
              </div>
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Total Seats</strong>
                </div>
                <div class="col-6 py-1">40 Seats</div>
              </div>
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Class Time</strong>
                </div>
                <div class="col-6 py-1">08:00 - 10:00</div>
              </div>
              <div class="row">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Tution Fee</strong>
                </div>
                <div class="col-6 py-1">$290 / Month</div>
              </div>
            </div>
            <a href="" class="btn btn-primary px-4 mx-auto mb-4">Únete ahora</a>
          </div>
        </div>
        <div class="col-lg-4 mb-5">
          <div class="card border-0 bg-light shadow-sm pb-2">
            <img class="card-img-top mb-2" src="img/class-3.jpg" alt="" />
            <div class="card-body text-center">
              <h4 class="card-title">Ciencias Básicas</h4>
              <p class="card-text">
                Justo ea diam stet diam ipsum no sit, ipsum vero et et diam
                ipsum duo et no et, ipsum ipsum erat duo amet clita duo
              </p>
            </div>
            <div class="card-footer bg-transparent py-4 px-5">
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Age of Kids</strong>
                </div>
                <div class="col-6 py-1">3 - 6 Years</div>
              </div>
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Total Seats</strong>
                </div>
                <div class="col-6 py-1">40 Seats</div>
              </div>
              <div class="row border-bottom">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Class Time</strong>
                </div>
                <div class="col-6 py-1">08:00 - 10:00</div>
              </div>
              <div class="row">
                <div class="col-6 py-1 text-right border-right">
                  <strong>Tution Fee</strong>
                </div>
                <div class="col-6 py-1">$290 / Month</div>
              </div>
            </div>
            <a href="" class="btn btn-primary px-4 mx-auto mb-4">Únete ahora</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Class End -->

  <!-- Registration Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center" id="contacto">
        <div class="col-lg-7 mb-5 mb-lg-0">
          <p class="section-title pr-5">
            <span class="pr-2">RESERVE UN ASIENTO</span>
          </p>
          <h1 class="mb-4">Reserve un asiento para su hijo </h1>
          <p>
            Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo
            dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo.
            Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
            dolor
          </p>
          <ul class="list-inline m-0">
            <li class="py-2">
              <i class="fa fa-check text-success mr-3"></i>Labore eos amet
              dolor amet diam
            </li>
            <li class="py-2">
              <i class="fa fa-check text-success mr-3"></i>Etsea et sit dolor
              amet ipsum
            </li>
            <li class="py-2">
              <i class="fa fa-check text-success mr-3"></i>Diam dolor diam
              elitripsum vero.
            </li>
          </ul>
          <a href="" class="btn btn-primary mt-4 py-2 px-4">                    Reservar ahora
          </a>
        </div>
        <div class="col-lg-5">
          <div class="card border-0">
            <div class="card-header bg-secondary text-center p-4">
              <h1 class="text-white m-0">RESERVE UN ASIENTO </h1>
            </div>
            <div class="card-body rounded-bottom bg-primary p-5">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                </div>
                <div class="form-group">
                  <input type="email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                </div>
                <div class="form-group">
                  <select class="custom-select border-0 px-4" style="height: 47px">
                    <option selected>Select A Class</option>
                    <option value="1">Class 1</option>
                    <option value="2">Class 1</option>
                    <option value="3">Class 1</option>
                  </select>
                </div>
                <div>
                  <button class="btn btn-secondary btn-block border-0 py-3" type="submit">
                    Reservar ahora
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Registration End -->

  <!-- Team Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <div class="text-center pb-2" id="profesores">
        <p class="section-title px-5">
          <span class="px-2">Our Teachers</span>
        </p>
        <h1 class="mb-4">Conoce a nuestros profesores</h1>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="img/team-1.jpg" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Julia Smith</h4>
          <i>Music Teacher</i>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="img/team-2.jpg" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Jhon Doe</h4>
          <i>Language Teacher</i>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="img/team-3.jpg" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Mollie Ross</h4>
          <i>Dance Teacher</i>
        </div>
        <div class="col-md-6 col-lg-3 text-center team mb-5">
          <div class="position-relative overflow-hidden mb-4" style="border-radius: 100%">
            <img class="img-fluid w-100" src="img/team-4.jpg" alt="" />
            <div class="team-social d-flex align-items-center justify-content-center w-100 h-100 position-absolute">
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-twitter"></i></a>
              <a class="btn btn-outline-light text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-facebook-f"></i></a>
              <a class="btn btn-outline-light text-center px-0" style="width: 38px; height: 38px" href="#"><i
                  class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <h4>Donald John</h4>
          <i>Art Teacher</i>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

 

  <!-- Footer Start -->
  <div class="container-fluid bg-secondary text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
      <div class="col-lg-3 col-md-6 mb-5">
        <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0"
          style="font-size: 40px; line-height: 40px">
          <i class="flaticon-043-teddy-bear"></i>
          <span class="text-white">Guilford
          </span>
        </a>
        <p>
          Labore dolor amet ipsum ea, erat sit ipsum duo eos. Volup amet ea
          dolor et magna dolor, elitr rebum duo est sed diam elitr. Stet elitr
          stet diam duo eos rebum ipsum diam ipsum elitr.
        </p>
        <div class="d-flex justify-content-start mt-4">
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="#"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="#"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="#"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px"
            href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Póngase en contacto con nosotros</h3>
        <div class="d-flex">
          <h4 class="fa fa-map-marker-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Dirección</h5>
            <p>123 av suba - Villa Elisa</p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-envelope text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Email</h5>
            <p>info@example.com</p>
          </div>
        </div>
        <div class="d-flex">
          <h4 class="fa fa-phone-alt text-primary"></h4>
          <div class="pl-3">
            <h5 class="text-white">Telefono</h5>
            <p>+012 345 67890</p>
          </div>
        </div>
      </div>
      <!--div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Quick Links</h3>
        <div class="d-flex flex-column justify-content-start">
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Classes</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Teachers</a>
          <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Blog</a>
          <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
        </div>
      </div-->
      <div class="col-lg-3 col-md-6 mb-5">
        <h3 class="text-primary mb-4">Boletín</h3>
        <form action="">
          <div class="form-group">
            <input type="text" class="form-control border-0 py-4" placeholder="Nombre" required="required" />
          </div>
          <div class="form-group">
            <input type="email" class="form-control border-0 py-4" placeholder="Correo" required="required" />
          </div>
          <div>
            <button class="btn btn-primary btn-block border-0 py-3" type="submit">
              Enviar
            </button>
          </div>
        </form>
      </div>
    </div>
    <div class="container-fluid pt-5" style="border-top: 1px solid rgba(23, 162, 184, 0.2) ;">
      <p class="m-0 text-center text-white">
        &copy;
        <a class="text-primary font-weight-bold" href="#">Guilford.com</a>.
        All Rights Reserved.

        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        Designed by:
        <a class="text-primary font-weight-bold" href="https://luiguie.jimdo.com">Luis Hernando Soto Mesa</a>
        <br />Distributed By:
        <a href="https://luiguie.jimdo.com" target="_blank">Lyvos</a>
      
      </p>
    </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-primary p-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>