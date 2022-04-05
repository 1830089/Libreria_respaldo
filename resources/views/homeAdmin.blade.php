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
            <a class="nav-link" href="{{route('agregarLibro-admin.index')}}"><i class="fas fa-plus text-light"> Agregar</i></a>
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
  <!--modo nocturno-->

  <div class="nv-main acomodar">
    <label id="toggle-label" for="toggle" class="btn btn-secondary">
      <span><i class="fas fa-sun"></i></span>
      <input type="checkbox" id="toggle">
      <span class="slider"></span>
      <span><i class="fas fa-moon"></i></span>
    </label>
  </div>


  <!--fin modo nocturno-->


  <!--cabecera-->
  <header class="main-header py-5 contenedor">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner text-dark">
        <div class="carousel-item active">
          <div class="container">
            

            <div class="row">
              <div class="col-md-6 text-center justify-content-center align-self-center">
                  <p class="titulo-letra">{{$busqueda->nombre_libro}}</p>
                  <p class="color-gris">{{substr($busqueda->descripcion,0,200);}}</p>
                  <a href="{{route('descripcionAdmin.index', $busqueda->id)}}" class="btn btn-outline-dark btn-lg color-gris"> Leer más</a>
              </div>
              <div class="col-6 m-0 py-0">
                <img class="img2" src="{{$busqueda->ruta}}" alt="First slide"> 
             </div>
          </div>

        </div>
        </div>

        @foreach ($libross as $libre)
            
        
        <div class="carousel-item">
          <div class="container">
            <div class="row">
                <div class="col-6 text-center justify-content-center align-self-center m-0">
                    <p class="titulo-letra"> {{$libre->nombre_libro}}</p>
                    <p class="color-gris">{{substr($libre->descripcion, 0, 200);}}</p>
                    <a href="{{route('descripcionAdmin.index',$libre->id)}}" class="btn btn-outline-dark btn-lg color-gris"> Leer más</a>
                </div>
                <div class="col-6">
                  <img class="img2" src="{{$libre->ruta}}" alt="Imagen Libro"> 
               </div>
            </div>
        </div>
        </div>

        @endforeach
        


        
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

            @foreach ($libros as $libro)
              

            <div class="tarjeta m-0">
              <div class="row m-0 py-0">
              <img src="{{$libro->ruta}}">
              </div>
              <div class="row m-0 py-0">
                <div class="col-12 tamanio color-negro">
                  <p class="text-center">{{$libro->nombre_libro}}</p>
                </div>
              </div>
              <div class="row m-0 py-0">
              <div class="col-6 tamanio-opciones">
                <form action="#">
                  @csrf
                  <input type="hidden" name="producto_id" value="{{$libro->id}}">
                  <button type="submit" class="btn btn-outline-success"><i class="fas fa-credit-card color-negro"> Comprar</i></button>
                </form>
              </div>
              <div class="col-6 tamanio-opciones">
                <a href="{{route('descripcionAdmin.index', $libro->id)}}" class="btn btn-outline-warning">
                  <i class="far fa-eye color-negro"> Ver más</i>
                </a>
              </div>
              </div>
            </div>
            @endforeach

          

        

     

   

  


            
          
      
     
    
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
<script src="{{asset('../js/modoNocturno.js')}}"></script>
</body>
</html>