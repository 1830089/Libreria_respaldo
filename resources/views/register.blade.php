@extends('layouts.applogin')

@section('name','Register')

@section('content')

<nav class="nv-main">
    <a class="navbar-brand" href="{{route('home.index')}}"><img src="../Images/LogoMakr-1oya0s.png" alt="icono Sorprende" class="nav-brand col-md-10"></a>
</nav>

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
<div class="row">
    <div class="col-6 mx-auto contenedor-register" id="registro">
        <div class="text-end">
            <img src="#" width="40" alt="">
        </div>
        <div class="container">
            <h2 class="fw-bold text-center py-2 text-white bienvenido">Registrarse</h2>
            </div>
        <!--LOGIN-->
        <form action="" method="POST">
            @csrf
            <div class="mb-4">
                <div class="mb-4">
                    <label for="name" class="form-label text-white">Nombre de usuario</label>
                    <input type="text" class="form-control" name="name">
                    </div>
                    @error('name')
                    <div class="alert alert-danger" role="alert">
                        * El nombre es requerido
                      </div>

                      @enderror
                <div class="mb-4">
                    <label for="email" class="form-label text-white">Correo Electronico</label>
                    <input type="email" class="form-control" name="email">

                </div>

                @error('email')
                    <div class="alert alert-danger" role="alert">
                        * El correo es requerido
                      </div>

                      @enderror

                <div class="mb-4">
                    <label for="password" class="form-label text-white">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>

                @error('password')
                    <div class="alert alert-danger" role="alert">
                        * La contraseña es requerida
                      </div>

                      @enderror
                <div class="mb-4">
                    <label for="password" class="form-label text-white">Repite Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-secondary">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>


    <script src="{{asset('../js/modoNocturno.js')}}"></script>
@endsection