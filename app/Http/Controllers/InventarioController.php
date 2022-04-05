<?php

namespace App\Http\Controllers;

use App\Models\autor;
use App\Models\categoria;
use App\Models\editorial;
use App\Models\libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InventarioController extends Controller
{
    public function create(){

        $libros= libro::all();
        $busqueda_categoria= categoria::all();
        $busqueda_autor= autor::all();
        $busqueda_editorial=editorial::all();
        return view("inventario",compact('libros','busqueda_categoria','busqueda_autor','busqueda_editorial'));
    }

    public function actualizar(libro $id,Request $request){

        if($request->file){
        


            $imagen= $request->file('file')->store('public/Images');

            $url= Storage::url($imagen);

            $id->isbn= $request->isbn;
            $id->nombre_libro= $request->titulo;
            $id->autor_id= $request->autor;
            $id->editorial_id= $request->editorial;
            $id->categoria_id= $request->categoria;
            $id->precio= $request->precio;
            $id->descripcion= $request->description;
            $id->cantidad_producto= $request->cantidad;
            $id->ruta= $url;

            $id->save();
        }else{

            $id->isbn= $request->isbn;
            $id->nombre_libro= $request->titulo;
            $id->autor_id= $request->autor;
            $id->editorial_id= $request->editorial;
            $id->categoria_id= $request->categoria;
            $id->precio= $request->precio;
            $id->descripcion= $request->description;
            $id->cantidad_producto= $request->cantidad;
            $id->ruta= $request->ruta;

            $id->save();

        }

        return redirect()->route('inventario-admin.index')->with('actualizar','ok');
    }

    public function eliminar(libro $id){

        $url= str_replace('storage/Images', 'public', $id->ruta);

        Storage::delete($url);

        $id->delete();
        return redirect()->route('inventario-admin.index')->with('eliminar','ok');

    }
}
