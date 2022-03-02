@extends('layouts.applogin')

@section('name','Login')

@section('content')

<nav class="nav-main">
    <a class="navbar-brand" href="{{route('home.index')}}"><img src="../Images/LogoMakr-1oya0s.png" alt="icono Sorprende" class="nav-brand col-md-10"></a>
</nav>
<div class="container">
    <div class="row">
        <div class="col-6 mx-auto contenedor" >
            <div class="text-end">
                <img src="#" width="40" alt="">
            </div>
            <div class="container">
            <h2 class="fw-bold text-center py-2 text-white bienvenido">Bienvenido</h2>
            </div>
            <!--LOGIN-->
            <form action="" method="POST">
                @csrf
                <div class="mb-4">
                    <div class="mb-4">
                        <label for="email" class="form-label text-white">Correo Electronico</label>
                        <input type="email" class="form-control" name="email">

                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label text-white">Contraseña</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    @error('message')
                    <div class="alert alert-danger" role="alert">
                        *Error usuario y/o contraseña incorrectos, favor ingresar nuevamente
                      </div>

                      @enderror
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-light btn-lg col-md-12">Iniciar sesión</button>
                    </div>
                    <div class="my-3">
                        <span class="text-white">¿No tienes cuenta? <a href="{{route('register.index')}}" class=" text-white">Registrate</a></span><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection