<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DescripcionController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\AgregarController;

use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('home');
})->name('home.index');




Route::get('/register',[RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register',[RegisterController::class, 'store'])->name('register.store');


Route::get('/login',[SessionController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login',[SessionController::class, 'store'])->name('login.store');


Route::get('/logout',[SessionController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');


Route::get('/carrito',[CarritoController::class, 'create'])->name('carrito.index')
->middleware('auth');

Route::get('/descripcion',[DescripcionController::class, 'create'])->name('descripcion.index');


Route::get('/admin-home',[AdminController::class, 'create'])
->middleware('auth.admin')
->name('home-admin.index');

Route::get('/admin-inventario',[InventarioController::class, 'create'])
->middleware('auth.admin')
->name('inventario-admin.index');

Route::get('/admin-agregar',[AgregarController::class, 'create'])
->middleware('auth.admin')
->name('agregar-admin.index');