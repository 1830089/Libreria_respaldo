<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregarController extends Controller
{
    public function create(){
        return view("agregar");
    }
}
