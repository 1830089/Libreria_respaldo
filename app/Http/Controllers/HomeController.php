<?php

namespace App\Http\Controllers;

use App\Models\libro;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function create(){

        $libross= libro::orderBy('id', 'desc')->paginate(3);
        $libros= libro::all();
        $busqueda= $libros->find(1);
        return view('home',compact('libros', 'libross','busqueda'));
    }
}
