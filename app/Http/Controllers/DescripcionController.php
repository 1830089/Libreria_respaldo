<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\categoria;
use App\Models\editorial;
use App\Models\libro;
use Illuminate\Http\Request;

class DescripcionController extends Controller
{
    public function create($id){

        $busqueda= libro::find($id);
        $busqueda_categoria= categoria::find($busqueda->categoria_id);
        $busqueda_autor= autor::find($busqueda->autor_id);
        $busqueda_editorial=editorial::find($busqueda->editorial_id);
        return view("descripcion", compact('busqueda','busqueda_categoria', 'busqueda_autor', 'busqueda_editorial'));
    }


    public function create_admin($id){

        $busqueda= libro::find($id);
        $busqueda_categoria= categoria::find($busqueda->categoria_id);
        $busqueda_autor= autor::find($busqueda->autor_id);
        $busqueda_editorial=editorial::find($busqueda->editorial_id);
        return view("descripcionAdmin", compact('busqueda','busqueda_categoria', 'busqueda_autor', 'busqueda_editorial'));
    }
}
