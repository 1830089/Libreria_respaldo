<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\categoria;
use App\Models\editorial;
use App\Models\libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AgregarController extends Controller
{
    public function create_libro(){

        $categorias= categoria::all();
        $autores= autor::all();
        $editoriales= editorial::all();

        return view("agregarLibro",compact('categorias','autores','editoriales'));
    }

    public function create_autor(){
        return view("agregarAutor");
    }

    public function create_editorial(){
        return view("agregarEditorial");
    }

    public function create_categoria(){
        return view("agregarCategoria");
    }

    public function store_libro(Request $request){
        $request->validate([
            'file' => 'required|Image'
        ]);
        $imagen= $request->file('file')->store('public/Images');

        $url= Storage::url($imagen);

        $libro= new libro();

        $libro->isbn= $request->isbn;
        $libro->nombre_libro= $request->titulo;
        $libro->autor_id= $request->autor;
        $libro->editorial_id= $request->editorial;
        $libro->categoria_id= $request->categoria;
        $libro->precio= $request->precio;
        $libro->descripcion= $request->description;
        $libro->cantidad_producto= $request->cantidad;
        $libro->ruta= $url;

        $libro->save();
        return redirect()->route('agregarLibro-admin.index')->with('agregado', 'ok');

    }
    public function store_autor(Request $request){

        $autor= new autor();

        $autor->nombre_autor= $request->name;

        $autor->save();

        return redirect()->route('agregarAutor-admin.index')->with('agregado', 'ok');
        //return $request;
    }
    public function store_editorial(Request $request){
        $editorial= new editorial();

        $editorial->nombre_editorial= $request->name;

        $editorial->save();

        return redirect()->route('agregarEditorial-admin.index')->with('agregado', 'ok');
        //return $request;
        
    }
    public function store_categoria(Request $request){
        $categoria= new categoria();

        $categoria->nombre_categoria= $request->name;

        $categoria->save();

        return redirect()->route('agregarCategoria-admin.index')->with('agregado', 'ok');
        //return $request;
    }
}
