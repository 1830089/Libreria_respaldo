<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libreria Sorprende</title>
    <link rel="icon" href="../Images/LogoMakr-8mWjo2.png"> 
    <!-- Bootsrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

     <!--font oswald-->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">

    <!--iconos de redes sociales-->
    <script src="https://kit.fontawesome.com/2291e076db.js" crossorigin="anonymous"></script>
    <!-- CUSTOM CSS-->
    <link rel="stylesheet" href="{{asset('../Css/home.css')}}">
</head>
<body>
  <!--barra de navegación NAVBAR-->

  <nav class="navbar navbar-expand-lg nv-main text-light nav-main">
    <div class="col-md-2">
    <a class="navbar-brand" href="{{route('home-admin.index')}}"><img src="../Images/LogoMakr-1oya0s.png" alt="logo Sorprende" class="nav-brand"></a>
  </div>
    <div class="col-md-10">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-md-5">
    </div>
    <div class="col-md-7">
      <ul class="navbar-nav ml-auto text-light">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('inventario-admin.index')}}"><i class="fas fa-warehouse text-light"> Inventario</i></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{route('agregar-admin.index')}}"><i class="fas fa-plus text-light"> Agregar</i></a>
          </li>
        <li class="nav-item dropdown text-light">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user font-weight-bold text-light "> Mi cuenta</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('login.destroy')}}">Cerrar sesión</a>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </div>
  </nav>
  <!--fin barra de navegación-->


  <!--cabecera-->
  <header class="main-header py-5 contenedor">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner text-dark">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
                <div class="col-md-6 text-center justify-content-center align-self-center">
                    <h1> Titulo del libro</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, laudantium?</p>
                    <a href="#" class="btn btn-outline-dark btn-lg"> Leer más</a>
                </div>
                <div class="col-md-6">
                  <img class="d-block w-65" src="../Images/ejemplolibro.jpg" alt="First slide"> 
               </div>
            </div>
        </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
                <div class="col-md-6 text-center justify-content-center align-self-center">
                    <h1> Titulo del libro</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, laudantium?</p>
                    <a href="#" class="btn btn-outline-dark btn-lg"> Leer más</a>
                </div>
                <div class="col-md-6">
                  <img class="d-block w-65" src="../Images/ejemplolibro.jpg" alt="First slide"> 
               </div>
            </div>
        </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
                <div class="col-md-6 text-center justify-content-center align-self-center">
                    <h1> Titulo del libro</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, laudantium?</p>
                    <a href="#" class="btn btn-outline-dark btn-lg"> Leer más</a>
                </div>
                <div class="col-md-6">
                  <img class="d-block w-65" src="../Images/ejemplolibro.jpg" alt="First slide"> 
               </div>
            </div>
        </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
      <!--<div class="container">
        <div class="row">
            <div class="col-md-6 text-center justify-content-center align-self-center">
                <h1> Titulo del libro</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, laudantium?</p>
                <a href="#" class="btn btn-outline-secondary btn-lg text-dark"> Leer más</a>
            </div>
            <div class="col-md-6">
                <img src="IMG/ejemplolibro.jpg" alt="imagen del producto" class="img-fluid d-none d-sm-block" style="width: 50%;">
            </div>
        </div>
    </div>-->
  </header>
  <!--fin cabecera-->
  <!--NewSletter el espaciado de suscribir-->
  <section class="text-light py-5 nv-main">
    <div class="container text-center font-weight-bold">
        <h1>NUESTROS LIBROS</h1>
    </div>
</section>

  <!--inicia contenedor-->
  <div class="contenedor">

    <!--NewSletter el espaciado de suscribir-->

    <!--features-->
    <section class="py-5">
        <div class="news-cards">
              <div class="text-center text-dark font-weight-bold">
                <div class="panel panel-default shadow p-3 mb-5 rounded cartas">
                  <div class="panel-title">
                    <h2 class="align-text-left py-1">Bajo un cielo escarlata</h1>  
                  </div>
                  <div class="panel-body py-2">
                      <img src="https://images-na.ssl-images-amazon.com/images/I/419DHP1fqiL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-responsive" id="img-cards">
                  </div>
                  <div class="panel-footer align-text-left p-0">
                      <a href="#" class="btn btn-outline-success text-dark">
                        <i class="fas fa-credit-card"> Comprar</i>
                      </a>
                      <a href="#" class="btn btn-outline-warning text-dark">
                        <i class="far fa-eye"> Ver más</i>
                      </a>
                  </div>
                </div>
            </div>
            <div class="text-center text-dark font-weight-bold">
              <div class="panel panel-default shadow p-3 mb-5 rounded cartas">
                <div class="panel-title">
                  <h2 class="align-text-left py-1">Bajo un cielo escarlata</h1>  
                </div>
                <div class="panel-body py-2">
                    <img src="https://images-na.ssl-images-amazon.com/images/I/419DHP1fqiL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-responsive" id="img-cards">
                </div>
                <div class="panel-footer align-text-left p-0">
                    <a href="#" class="btn btn-outline-success text-dark">
                      <i class="fas fa-credit-card"> Comprar</i>
                    </a>
                    <a href="#" class="btn btn-outline-warning text-dark">
                      <i class="far fa-eye"> Ver más</i>
                    </a>
                </div>
              </div>
          </div>

          <div class="text-center text-dark font-weight-bold">
            <div class="panel panel-default shadow p-3 mb-5 rounded cartas">
              <div class="panel-title">
                <h2 class="align-text-left py-1">Bajo un cielo escarlata</h1>  
              </div>
              <div class="panel-body py-2">
                  <img src="https://images-na.ssl-images-amazon.com/images/I/419DHP1fqiL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-responsive" id="img-cards">
              </div>
              <div class="panel-footer align-text-left p-0">
                  <a href="#" class="btn btn-outline-success text-dark">
                    <i class="fas fa-credit-card"> Comprar</i>
                  </a>
                  <a href="#" class="btn btn-outline-warning text-dark">
                    <i class="far fa-eye"> Ver más</i>
                  </a>
              </div>
            </div>
        </div>

        <div class="text-center text-dark font-weight-bold">
          <div class="panel panel-default shadow p-3 mb-5 rounded cartas">
            <div class="panel-title">
              <h2 class="align-text-left py-1">Bajo un cielo escarlata</h1>  
            </div>
            <div class="panel-body py-2">
                <img src="https://images-na.ssl-images-amazon.com/images/I/419DHP1fqiL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-responsive" id="img-cards">
            </div>
            <div class="panel-footer align-text-left p-0">
                <a href="#" class="btn btn-outline-success text-dark">
                  <i class="fas fa-credit-card"> Comprar</i>
                </a>
                <a href="#" class="btn btn-outline-warning text-dark">
                  <i class="far fa-eye"> Ver más</i>
                </a>
            </div>
          </div>
      </div>

      <div class="text-center text-dark font-weight-bold">
        <div class="panel panel-default shadow p-3 mb-5 rounded cartas">
          <div class="panel-title">
            <h2 class="align-text-left py-1">Bajo un cielo escarlata</h1>  
          </div>
          <div class="panel-body py-2">
              <img src="https://images-na.ssl-images-amazon.com/images/I/419DHP1fqiL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-responsive" id="img-cards">
          </div>
          <div class="panel-footer align-text-left p-0">
              <a href="#" class="btn btn-outline-success text-dark">
                <i class="fas fa-credit-card"> Comprar</i>
              </a>
              <a href="#" class="btn btn-outline-warning text-dark">
                <i class="far fa-eye"> Ver más</i>
              </a>
          </div>
        </div>
    </div>

    <div class="text-center text-dark font-weight-bold">
      <div class="panel panel-default shadow p-3 mb-5 rounded cartas">
        <div class="panel-title">
          <h2 class="align-text-left py-1">Bajo un cielo escarlata</h1>  
        </div>
        <div class="panel-body py-2">
            <img src="https://images-na.ssl-images-amazon.com/images/I/419DHP1fqiL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-responsive" id="img-cards">
        </div>
        <div class="panel-footer align-text-left p-0">
            <a href="#" class="btn btn-outline-success text-dark">
              <i class="fas fa-credit-card"> Comprar</i>
            </a>
            <a href="#" class="btn btn-outline-warning text-dark">
              <i class="far fa-eye"> Ver más</i>
            </a>
        </div>
      </div>
  </div>

  <div class="text-center text-dark font-weight-bold">
    <div class="panel panel-default shadow p-3 mb-5 rounded cartas">
      <div class="panel-title">
        <h2 class="align-text-left py-1">Bajo un cielo escarlata</h1>  
      </div>
      <div class="panel-body py-2">
          <img src="https://images-na.ssl-images-amazon.com/images/I/419DHP1fqiL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-responsive" id="img-cards">
      </div>
      <div class="panel-footer align-text-left p-0">
          <a href="#" class="btn btn-outline-success text-dark">
            <i class="fas fa-credit-card"> Comprar</i>
          </a>
          <a href="#" class="btn btn-outline-warning text-dark">
            <i class="far fa-eye"> Ver más</i>
          </a>
      </div>
    </div>
</div>

<div class="text-center text-dark font-weight-bold">
  <div class="panel panel-default shadow p-3 mb-5 rounded cartas">
    <div class="panel-title">
      <h2 class="align-text-left py-1">Bajo un cielo escarlata</h1>  
    </div>
    <div class="panel-body py-2">
        <img src="https://images-na.ssl-images-amazon.com/images/I/419DHP1fqiL._SY344_BO1,204,203,200_QL70_ML2_.jpg" class="img-responsive" id="img-cards">
    </div>
    <div class="panel-footer align-text-left p-0">
        <a href="#" class="btn btn-outline-success text-dark">
          <i class="fas fa-credit-card"> Comprar</i>
        </a>
        <a href="#" class="btn btn-outline-warning text-dark">
          <i class="far fa-eye"> Ver más</i>
        </a>
    </div>
  </div>
</div>
            
          
      
     
    
</div>
    </section>
  </div>
    <!--footer
    <footer style="background:#535c68;">
      <div class="container p-3 text-white text-center">
        <p>de momento sin nada que poner :v</p>
      </div>
    </footer>
  -->
    <!--Bootsrap javascript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>