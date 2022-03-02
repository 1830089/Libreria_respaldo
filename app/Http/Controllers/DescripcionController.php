<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescripcionController extends Controller
{
    public function create(){
        return view("descripcion");
    }
}
