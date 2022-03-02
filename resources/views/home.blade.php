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
        <input class="form-control-lg mr-sm-2 col-md-10" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>
    <div class="col-md-5">
      <ul class="navbar-nav ml-auto text-light">
        @if(auth()->check())
        <li class="nav-item active">
          <a class="nav-link" href="{{route('carrito.index')}}"><i class="fas fa-shopping-cart text-light"> Mi Carrito</i></a>
        </li>
        <li class="nav-item dropdown text-light">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="far fa-user font-weight-bold text-light "> Mi cuenta</i>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('login.destroy')}}">Cerrar sesión</a>
          </div>
        </li>
        @else
        <li class="nav-item active">
          <a class="nav-link" href="{{route('carrito.index')}}"><i class="fas fa-shopping-cart text-light"> Mi Carrito</i></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('login.index') }}"><i class="far fa-user font-weight-bold text-light"> Inicia sesión</i></a>
        </li>
        @endif
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
                    <a href="{{route('descripcion.index')}}" class="btn btn-outline-dark btn-lg"> Leer más</a>
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
                    <a href="{{route('descripcion.index')}}" class="btn btn-outline-dark btn-lg"> Leer más</a>
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
                    <a href="{{route('descripcion.index')}}" class="btn btn-outline-dark btn-lg"> Leer más</a>
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
                      <a href="{{route('carrito.index')}}" class="btn btn-outline-success text-dark">
                        <i class="fas fa-credit-card"> Comprar</i>
                      </a>
                      <a href="{{route('descripcion.index')}}" class="btn btn-outline-warning text-dark">
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
                    <a href="{{route('carrito.index')}}" class="btn btn-outline-success text-dark">
                      <i class="fas fa-credit-card"> Comprar</i>
                    </a>
                    <a href="{{route('descripcion.index')}}" class="btn btn-outline-warning text-dark">
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
                  <a href="{{route('carrito.index')}}" class="btn btn-outline-success text-dark">
                    <i class="fas fa-credit-card"> Comprar</i>
                  </a>
                  <a href="{{route('descripcion.index')}}" class="btn btn-outline-warning text-dark">
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
                <a href="{{route('carrito.index')}}" class="btn btn-outline-success text-dark">
                  <i class="fas fa-credit-card"> Comprar</i>
                </a>
                <a href="{{route('descripcion.index')}}" class="btn btn-outline-warning text-dark">
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
              <a href="{{route('carrito.index')}}" class="btn btn-outline-success text-dark">
                <i class="fas fa-credit-card"> Comprar</i>
              </a>
              <a href="{{route('descripcion.index')}}" class="btn btn-outline-warning text-dark">
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
            <a href="{{route('carrito.index')}}" class="btn btn-outline-success text-dark">
              <i class="fas fa-credit-card"> Comprar</i>
            </a>
            <a href="{{route('descripcion.index')}}" class="btn btn-outline-warning text-dark">
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
          <a href="{{route('carrito.index')}}" class="btn btn-outline-success text-dark">
            <i class="fas fa-credit-card"> Comprar</i>
          </a>
          <a href="{{route('descripcion.index')}}" class="btn btn-outline-warning text-dark">
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
        <a href="{{route('carrito.index')}}" class="btn btn-outline-success text-dark">
          <i class="fas fa-credit-card"> Comprar</i>
        </a>
        <a href="{{route('descripcion.index')}}" class="btn btn-outline-warning text-dark">
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
@endsection