<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="/public/css/style.css" />
  <link rel="stylesheet" href="/public/css/css.css">
  <title>LYVOS</title>
</head>

<body>
  <style>
    /*Eliminamos los margenes y paddings que agrega el navegador por defecto*/
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

body {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  width: 100%;
}
.container,
.row {
  height: 100%;
}
.lh-sm {
  width: 900px;
  text-align: center;
  margin-left: 200px;
}
header {
  width: 100%;
  position: fixed;
  z-index: 100;
}

.navbar {
  background: rgb(28, 167, 121);
}
.navbar {
  font-size: 20px;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

  background: rgb(28, 167, 121);
}
.navbar a {
  color: aliceblue;
}
main {
  width: auto;
  height: auto;
  background: rgb(248, 244, 244);
}
.contenido {
  padding-top: 10%;
}
.wrapper {
  width: 70%;
  margin: auto;
  overflow: hidden;
  color: rgb(5, 56, 100);
}
footer {
  background: rgb(28, 167, 121);
  margin-top: 15%;
}

/*administrador*/
#section-perfil {
  position: absolute;
  width: 20%;
  height: 100%;
  background: rgb(5, 56, 100);
}

ul{
  margin-top: 80%;
  color: beige;
}

#section-user{
  width: 100%;
  height: 100px;
  background: rgb(11, 209, 11);
} 
  </style>
  <div id="container">
    <header>
      <!--Navegacion-->
      <nav class="navbar">
        <div class="container-fluid">
          <a class="navbar" href="#" style="margin-left: 7%">
            <img src="img/LYVOS.png" alt="Sin logo" width="40" height="40" class="d-inline-block align-text-top"  />
            
          </a>

          <ul class="nav justify-content-center">
            
            <li class="nav-item">
              <a class="nav-link" href="#">INICIO</a>
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
    </header>

    <!--Navegacion-->
    <main>
      <section class="contenido wrapper">
        <h1>Sobre LYVOS</h1>

        <p>
          Nuestro Sistema de Gestión Educativa fortalece instituciones de
          educación básica y media gracias a la integración adecuada de las
          tecnologías de la información y las Comunicaciones (TIC).
        </p>
        <p>
          Detrás de este proyecto con una trayectoria de más de 15 años y con
          cobertura a nivel nacional, hay un equipo humano interdisciplinario,
          profesional, capaz, idóneo, amable y confiable que trabaja
          incansablemente siguiendo altos estándares de calidad, aliados que
          acompañarán a la Institución desde el inicio del montaje, la puesta
          en funcionamiento del Sistema y el acompañamiento permanente que
          asegure su buen funcionamiento.
        </p>
        <br />
        <br />
        <h2 class="text-center">NUESTOS USUARIOS</h2>
        <br />
        <br />
        <div class="card-group">
          <div class="card">
            <img src="https://i.pinimg.com/originals/4a/99/7c/4a997c344df2270c06928c80180e445c.png" class="card-img-top" alt="..." />
          </div>
          <div class="card">
            <img src="https://static.vecteezy.com/system/resources/previews/006/004/413/non_2x/university-or-school-engineering-emblem-logo-design-inspiration-vector.jpg" class="card-img-top" alt="..." />
          </div>
          <div class="card">
            <img src="https://i.pinimg.com/originals/27/fe/bd/27febd400c6350fece2c7fd363e8825b.png" class="card-img-top" alt="..." />
          </div>
          <div class="card">
            <img src="https://media.istockphoto.com/vectors/color-logo-of-the-school-vector-id1150645589" class="card-img-top" alt="..." />
          </div>
          <div class="card">
            <img src="https://i.pinimg.com/originals/3c/cd/4d/3ccd4dcffdb5217f026d709231ea8bcb.png" class="card-img-top" alt="..." />
          </div>
        </div>
      </section>
      <footer class="text-white text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
              <h5 class="text-uppercase">Nosotros.</h5>

              <p>
                Nuestro Sistema de Gestión Educativa fortalece instituciones
                de educación básica y media gracias a la integración adecuada
                de las tecnologías de la información y las Comunicaciones
                (TIC).
              </p>
              <p>Todos los derechos reservados</p>
              <p>Disenado por : Luis Hernando Soto Mesa</p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Contacto</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Direccion: Cra 115 # 148 40/ Bogotá</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Telefono: 305 8119573</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Email: luishernandosotomesa@gmail.com</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">Redes Sociales</h5>

              <ul class="list-unstyled mb-0">
                <li>
                  <a href="#!" class="text-white">Whatsapp</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Facebook</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Instagram</a>
                </li>
                <li>
                  <a href="#!" class="text-white">Youtube</a>
                </li>
                <li>
                  <a href="#ww.com" class="text-white">Twitter</a>
                </li>
              </ul>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
          © 2020 Copyright:
          <a class="text-white" href="https://luisinfo.com/">Luis Hernando Soto Mesa</a>
        </div>
        <!-- Copyright -->
      </footer>
    </main>
  </div>

  <!-- Modal -->
  
</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
  integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
  integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>