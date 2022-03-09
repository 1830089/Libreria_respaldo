<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\categoria;
use App\Models\editorial;
use App\Models\libro;


use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(){

        $libross= libro::orderBy('id', 'desc')->paginate(3);
        $libros= libro::all();
        $busqueda= $libros->find(4);
        return view("homeAdmin",compact('libros', 'libross', 'busqueda'));
    }

    public function create_editar($id){
        $busqueda= libro::find($id);
        $categorias= categoria::all();
        $autores= autor::all();
        $editoriales= editorial::all();
        return view('editarInventario',compact('busqueda','categorias','autores','editoriales'));
    }
}
