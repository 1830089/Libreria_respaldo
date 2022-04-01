<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="{{asset('../Css/descripcion.css')}}">
</head>
<body>

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


        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default shadow-lg p-3 mb-5 rounded m-2 color-diferencial color-negro">
                    <div class="panel-title">
                        <h2 class="text-center  font-weight-bold py-1"> Descripción del libro</h1>  
                      </div>
                      <div class="panel-body py-2">
                        <div class="row">
                        <div class="col-md-6 text-center justify-content-center align-self-center">
                            <h1>{{$busqueda->nombre_libro}}</h1>
                            <p>
                              {{$busqueda->descripcion}}
                            </p>
                            <center><table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:180px;"><i class="fas fa-th-large font-weight-bold"> categoria</i></th>
                                        <th style="width:180px;"><i class="far fa-newspaper font-weight-bold"> Editorial</i></th>
                                        <th style="width:180px;"><i class="fas fa-user-edit font-weight-bold"> Autor</i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$busqueda_categoria->nombre_categoria}}</td>
                                        <td>{{$busqueda_editorial->nombre_editorial}}</td>
                                        <td>{{$busqueda_autor->nombre_autor}}</td>
                                    </tr>
                                </tbody>
                            </table></center>

                        </div>
                        <div class="col-md-6 m-0 py-0">
                            <center>
                            <img class="d-block w-70" src="{{$busqueda->ruta}}" alt="First slide">
                            </center> 
                        </div>
                        </div>
                       </div>
                       <div class="panel-footer p-0">
                           <div class="container p-0">
                               <div class="row">
                            <div class="col-md-6 text-center">
                            <form action="{{route('carrito.agregar')}}" method="POST">
                              @csrf
                              <input type="hidden" name="producto_id" value="{{$busqueda->id}}">
                              <input type="hidden" name="cantidad_producto" id="cantidad_producto" value="">
                              <button type="submit" class="btn btn-outline-success color-negro"><i class="fas fa-credit-card"> Añadir al carrito</i></button>
                          </form>

                          <button class="btn btn-outline-warning color-negro" id="disminuir"><i class="fas fa-minus"></i></button>
                            <span id="valor" class="btn color-diferencial cantidad-producto"> 0 </span>
                          <button class="btn btn-outline-warning color-negro" id="aumentar"><i class="fas fa-plus"></i></button>
                            </div>
                            <div class="precio-tm col-6">
                              <center>
                                <p>precio SORPRENDE <br> <i class="fas fa-dollar-sign">{{$busqueda->precio}}</i></p>
                              </center>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
    <!--<footer class="bg-dark">
        <div class="container p-3 text-white text-center">
        </div>
      </footer>-->








    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="{{asset('../js/modoNocturno.js')}}"></script>

    <script>
      var cantidad= {!!$cantidad!!};
    </script>
    <script src="{{asset('../js/descripcion.js')}}"></script>        
</body>
</html>