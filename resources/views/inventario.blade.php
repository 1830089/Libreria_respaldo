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
        <link rel="stylesheet" href="{{asset('../Css/carrito.css')}}">
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
          <a class="nav-link" href="{{route('home-admin.index')}}"><i class="fas fa-home text-light"> Home</i></a>
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


        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default shadow-lg p-3 mb-5 bg-white rounded m-2">
                    <div class="panel-title">
                        <h2 class="text-center  font-weight-bold text-dark py-1"> <i class="fas fa-warehouse"> Inventario</i></h1>  
                      </div>
                      <div class="panel-body py-2">
                        

                        <center><table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width:180px;">Nombre</th>
                                    <th style="width:180px;">Isbn</th>
                                    <th style="width:180px;">Autor</th>
                                    <th style="width:180px;">Editorial</th>
                                    <th style="width:180px;">Categoria</th>
                                    <th style="width:180px;">Cantidad</th>
                                    <th style="width:180px;">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($libros as $libro)
                                  
                                <tr>
                                    <td>{{$libro->nombre_libro}}</td>
                                    <td>{{$libro->isbn}}</td>
                                    <td>{{$busqueda_autor->find($libro->autor_id)->nombre_autor}}</td>
                                    <td>{{$busqueda_editorial->find($libro->editorial_id)->nombre_editorial}}</td>
                                    <td>{{$busqueda_categoria->find($libro->categoria_id)->nombre_categoria}}</td>
                                    <td>{{$libro->cantidad_producto}}</td>
                                    <td>${{$libro->precio}}</td>
                                    <td>
                                      <form action="{{route('editarAdmin.index',$libro->id)}}">
                                        @csrf
                                        <button type="submit" class="btn btn-warning"><i class="fas fa-edit"></i></button>
                                      </form>
                                    </td>
                                    <td>
                                      <form action="{{route('inventario-eliminar-admin.delete',$libro)}}" method="POST" class="formulario-eliminar">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                      </form>
                                  </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table></center>

                       </div>
                       <div class="panel-footer p-0 border-top">
                           
                    </div>
                </div>
            </div>
        </div>





        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.min.css"></script>

        @if (session('eliminar')== 'ok')

        <script>
          Swal.fire(
        'Eliminado!',
        'El elemento ha sido eliminado.',
        'success')
        </script>
            
        @endif





        <script>
          
          $('.formulario-eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
    title: '¿Deseas eliminar este libro?',
    text: " Este libro se eliminara permanentemente de la base de datos",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Si, borralo!',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      /*Swal.fire(
        'Eliminado!',
        'El elemento ha sido eliminado.',
        'success'
      )*/
      this.submit();
    }
  })
          });
          /*Swal.fire({
    title: '¿Deseas eliminar este elemento del carrito?',
    text: " ¿Estas seguro de eliminar del carrito?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: '¡Si, borralo!',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Eliminado!',
        'El elemento ha sido eliminado.',
        'success'
      )
    }
  })*/

  
</script>
</body>
</html>