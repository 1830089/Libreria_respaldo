<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libro;
use Cart;


class CarritoController extends Controller
{
    

    public function create(){
        $subtotal=0;
        return view("carrito",compact('subtotal'));
    }

    public function add( Request $request){
        $producto= libro::find($request->producto_id);

        if(isset($request->cantidad_producto)){

            Cart::add($producto->id,
        $producto->nombre_libro,
        $producto->precio,
        $request->cantidad_producto
        ,
        array("urlfoto"=>$producto->ruta));

        }else{

            Cart::add($producto->id,
        $producto->nombre_libro,
        $producto->precio,
        1
        ,
        array("urlfoto"=>$producto->ruta));
        }
        

        return redirect()->route('home.index');

    }

    public function remover(Request $request){
        Cart::remove([$request->producto_id
        ]);

        return redirect()->route('carrito.index')->with('eliminar','ok');
    }

    public function clear(){
        Cart::clear();
        return redirect()->route('carrito.index')->with('eliminar','ok');
    }
}
