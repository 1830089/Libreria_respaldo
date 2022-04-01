<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DescripcionController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\AgregarController;
use App\Http\Controllers\HomeController;

use GuzzleHttp\Middleware;

Route::get('/',[HomeController::class, 'create'])
->name('home.index');



/*   Rutas del registro*/
Route::get('/register',[RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register',[RegisterController::class, 'store'])->name('register.store');


/*   Rutas del Inicio de sesión*/


Route::get('/login',[SessionController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login',[SessionController::class, 'store'])->name('login.store');


Route::get('/logout',[SessionController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

/*   Rutas del carrito*/

Route::get('/carrito',[CarritoController::class, 'create'])->name('carrito.index')
->middleware('auth');

Route::post('/carrito-agregar',[CarritoController::class, 'add'])->name('carrito.agregar')
->middleware('auth');

Route::post('/carrito-limpiar',[CarritoController::class, 'clear'])->name('carrito.limpiar')
->middleware('auth');

Route::post('/carrito-remove',[CarritoController::class, 'remover'])->name('carrito.remove')
->middleware('auth');


/*   Rutas descripcion del libro*/


Route::get('/descripcion/{id}',[DescripcionController::class, 'create'])->name('descripcion.index');

Route::get('/admin-descripcion/{id}',[DescripcionController::class, 'create_admin'])->name('descripcionAdmin.index');


/*   Rutas para el admin-------------------------------------------------------*/

/*   Rutas del home del admin*/

Route::get('/editar-libro/{id}',[AdminController::class, 'create_editar'])->name('editarAdmin.index');



Route::get('/admin-home',[AdminController::class, 'create'])
->middleware('auth.admin')
->name('home-admin.index');

/*   Rutas del inventario del admin*/

Route::get('/admin-inventario',[InventarioController::class, 'create'])
->middleware('auth.admin')
->name('inventario-admin.index');


Route::put('/admin-actualizar-inventario/{id}',[InventarioController::class, 'actualizar'])
->middleware('auth.admin')
->name('inventario-actualizar-admin.update');

Route::delete('/admin-eliminar-inventario/{id}',[InventarioController::class, 'eliminar'])
->middleware('auth.admin')
->name('inventario-eliminar-admin.delete');

/*   Rutas para agregars del admin*/

Route::get('/admin-agregar-libro',[AgregarController::class, 'create_libro'])
->middleware('auth.admin')
->name('agregarLibro-admin.index');

Route::get('/admin-agregar-autor',[AgregarController::class, 'create_autor'])
->middleware('auth.admin')
->name('agregarAutor-admin.index');

Route::get('/admin-agregar-editorial',[AgregarController::class, 'create_editorial'])
->middleware('auth.admin')
->name('agregarEditorial-admin.index');

Route::get('/admin-agregar-categoria',[AgregarController::class, 'create_categoria'])
->middleware('auth.admin')
->name('agregarCategoria-admin.index');


/*   Rutas para agregar formularios post*/

Route::post('/admin-agregar-libro',[AgregarController::class, 'store_libro'])
->middleware('auth.admin')
->name('agregarLibro-admin.store');

Route::post('/admin-agregar-autor',[AgregarController::class, 'store_autor'])
->middleware('auth.admin')
->name('agregarAutor-admin.store');

Route::post('/admin-agregar-editorial',[AgregarController::class, 'store_editorial'])
->middleware('auth.admin')
->name('agregarEditorial-admin.store');

Route::post('/admin-agregar-categoria',[AgregarController::class, 'store_categoria'])
->middleware('auth.admin')
->name('agregarCategoria-admin.store');