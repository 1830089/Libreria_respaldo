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
  <link rel="stylesheet" href="{{asset('../Css/libros.css')}}">
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
      <div class="col-md-7">
    </div>
    <div class="col-md-5">
      <ul class="navbar-nav ml-auto text-light">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home-admin.index')}}"><i class="fas fa-home"> Home</i></a>
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

        <div class="d-flex" id="wrapper">

          <!-- Page content wrapper-->
          <div id="page-content-wrapper">
              <!-- Page content-->
              <div class="container-fluid">
                <div class="tab-content" id="v-pills-tabContent">
                  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><h1 id="h1">
                    <div class="col-md-12">
                      <div class="panel panel-default shadow-lg p-3 mb-5 rounded m-2 color-diferencial color-negro">
                        <div class="panel-title">
                          <h2 class="text-center  font-weight-bold py-1"> <i class="fas fa-book"> Editar libro</i></h1>  
                        </div>
                        <div class="panel-body py-2">
                          <form action="{{route('inventario-actualizar-admin.update',$busqueda->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-4">
                              <label for="isbn" class="form-label">Isbn</label>
                              <input type="text" class="form-control" name="isbn" value="{{$busqueda->isbn}}">
                          </div>
                          <div class="mb-4">
                            <label for="titulo" class="form-label">Título</label>
                             <input type="text" class="form-control" name="titulo" value="{{$busqueda->nombre_libro}}">
                            </div>
                            <div class="mb-4">
                              <label for="autor" class="form-label">Autor</label>
                              <select name="autor" class="custom-select">
                                
                                @foreach ($autores as $autor)
                                @if ($busqueda->autor_id == $autor->id)
                                    <option value="{{$autor->id}}" selected>{{$autor->nombre_autor}}</option>

                                @else
                                    <option value="{{$autor->id}}">{{$autor->nombre_autor}}</option>

                                @endif
                                @endforeach
                                
                              </select>
                              </div>
                              <div class="mb-4">
                                <label for="editorial" class="form-label">Editorial</label>
                                <select name="editorial" class="custom-select">
                                  @foreach ($editoriales as $editorial)
                                    @if ($busqueda->editorial_id == $editorial->id)
                                        <option value="{{$editorial->id}}" selected>{{$editorial->nombre_editorial}}</option>

                                    @else
                                        <option value="{{$editorial->id}}">{{$editorial->nombre_editorial}}</option>

                                    @endif
                                  @endforeach
                                </select>
                                </div>
                                <div class="mb-4">
                                  <label for="categoria" class="form-label">Categoria</label>
                                  <select name="categoria" class="custom-select">
                                    @foreach ($categorias as $categoria)
                                    @if ($busqueda->categoria_id == $categoria->id)
                                      <option value="{{$categoria->id}}" selected>{{$categoria->nombre_categoria}}</option>

                                    @else
                                    <option value="{{$categoria->id}}">{{$categoria->nombre_categoria}}</option>

                                    @endif
                                    @endforeach
                                  </select>
                                  </div>
                                <div class="mb-4">
                                  <label for="precio" class="form-label">Precio</label>
                                   <input type="number" step="0.01" class="form-control" name="precio" value="{{$busqueda->precio}}">
                                  </div>
                                  <div class="mb-4">
                                    <label for="cantidad" class="form-label">Cantidad</label>
                                     <input type="number" class="form-control" name="cantidad" value="{{$busqueda->cantidad_producto}}">
                                    </div>
                                    <div class="mb-4">
                                      <label for="description" class="form-label">Descripción</label>
                                       <textarea class="form-control" name="description" rows="8"  >{{$busqueda->descripcion}}</textarea>
                                      </div>
                                    <div class="mb-4">
                                      <label for="exampleFormControlFile1">Foto o imagen del libro</label>
                                      <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" accept="Image/*" value="{{$busqueda->ruta}}">
                                      </div>
                                      <input type="hidden" name="ruta" value="{{$busqueda->ruta}}">
                                    <div class="d-grid">
                                      <button type="submit" class="btn btn-secondary">Actualizar datos</button>
                                      </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
              
                </div>
              </div>
          </div>
      </div>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<script src="{{asset('../js/modoNocturno.js')}}"></script>

    </body>
</html>