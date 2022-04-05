@extends('layouts.apphome')

@section('name','Home')

@section('content')

     <!--barra de navegación NAVBAR-->

  <nav class="navbar navbar-expand-lg nv-main text-light nav-main">
    
    <div class="col-md-2">
    <a class="navbar-brand" href="{{route('home.index')}}"><img src="../Images/LogoMakr-1oya0s.png" alt="logo Sorprende" class="nav-brand"></a>
  </div>
    <div class="col-md-10">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col-md-7">
      <form class="form-inline my-2 ml-auto nav-right">
        <input class="form-control-lg mr-sm-2 col-md-10 borde" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
    <div class="col-md-5">
      <ul class="navbar-nav ml-auto">
        @if(auth()->check())
        <li class="nav-item active">
          <a class="nav-link" href="{{route('carrito.index')}}">
            @if(count(Cart::getContent()))
            <i class="fas fa-shopping-cart"> ver carrito <span class="badge badge-danger">{{count(Cart::getContent())}}</span></i>
            @else
            <i class="fas fa-shopping-cart"> ver carrito <span class="badge badge-danger"> 0 </span></i>
            @endif
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user font-weight-bold"> Mi cuenta</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('login.destroy')}}">Cerrar sesión</a>
          </div>
        </li>
        @else
        <li class="nav-item active">
          <a class="nav-link" href="{{route('carrito.index')}}">
            <i class="fas fa-shopping-cart"> Mi Carrito</i>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('login.index') }}"><i class="far fa-user font-weight-bold"> Inicia sesión</i></a>
        </li>
        @endif
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
                    <a href="{{route('descripcion.index',$busqueda->id)}}" class="btn btn-outline-dark btn-lg color-gris"> Leer más</a>
                </div>
                <div class="col-6 m-0 py-0 fondo">
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
                    <a href="{{route('descripcion.index', $libre->id)}}" class="btn btn-outline-dark btn-lg color-gris"> Leer más</a>
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
              <form action="{{route('carrito.agregar')}}" method="POST">
                @csrf
                <input type="hidden" name="producto_id" value="{{$libro->id}}">
                <button type="submit" class="btn btn-outline-success"><i class="fas fa-credit-card color-negro"> Comprar</i></button>
              </form>
            </div>
            <div class="col-6 tamanio-opciones">
              <a href="{{route('descripcion.index',$libro->id)}}" class="btn btn-outline-warning">
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

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.min.css"></script>
<script src="{{asset('../js/modoNocturno.js')}}"></script>
@if (session('eliminar')== 'ok')

        <script>
          Swal.fire(
        ':(',
        'se han agotado las unidades de este producto.',
        'info');
        </script>
            
        @endif