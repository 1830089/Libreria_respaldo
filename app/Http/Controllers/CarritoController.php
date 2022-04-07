<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Models\Detalle;
use Illuminate\Http\Request;
use App\Models\libro;
use App\Models\Venta;
use Cart;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CarritoController extends Controller
{
    

    public function create(){
        $subtotal=0;
        return view("carrito",compact('subtotal'));
    }

    public function add( Request $request){
        $producto= libro::find($request->producto_id);


        if(isset($request->cantidad_producto)){


            if(count((Cart::getContent()))&&(Cart::get($producto->id)!= null)){
                foreach(Cart::getContent() as $productos){

                    if($productos->id == $producto->id){

                        $bandera=0;
                        if(($producto->cantidad_producto-$productos->quantity)>0){

                            $bandera+=1;

                            
                        Cart::add($producto->id,
                        $producto->nombre_libro,
                        $producto->precio,
                        $request->cantidad_producto
                        ,
                        array("urlfoto"=>$producto->ruta));

                        break;
                        }else{

                            return redirect()->route('home.index')->with('eliminar','ok');
                        }
                    }

                    

                }

            }else{
            //foreach(Cart::)
            if(Cart::get($producto->id)== null){
                    Cart::add($producto->id,
                    $producto->nombre_libro,
                    $producto->precio,
                    $request->cantidad_producto
                    ,
                    array("urlfoto"=>$producto->ruta));
                }

                }

//            Cart::add($producto->id,
//        $producto->nombre_libro,
//        $producto->precio,
 //       $request->cantidad_producto/       ,
  //      array("urlfoto"=>$producto->ruta));

        }else{

            if(count((Cart::getContent()))&&(Cart::get($producto->id)!= null)){
                foreach(Cart::getContent() as $productos){

                    if($productos->id == $producto->id){

                        $bandera=0;
                        if(($producto->cantidad_producto-$productos->quantity)>0){

                            $bandera+=1;

                            
                        Cart::add($producto->id,
                        $producto->nombre_libro,
                        $producto->precio,
                        1
                        ,
                        array("urlfoto"=>$producto->ruta));

                        break;
                        }else{

                            return redirect()->route('home.index')->with('eliminar','ok');
                        }
                    }

                    

                }

            }else{
            //foreach(Cart::)
            if(Cart::get($producto->id)== null){
                    Cart::add($producto->id,
                    $producto->nombre_libro,
                    $producto->precio,
                    1
                    ,
                    array("urlfoto"=>$producto->ruta));
                }

                }
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

    public function pagar(Request $request){


        //llenar registro venta

        
        $venta= new Venta();

        $venta->cliente_id= auth()->user()->id;
        $venta->total= $request->subtotal;

        $venta->save();

        //llenar registro detalles venta

        $registro= DB::table('ventas')->latest('created_at')->first();

        foreach(Cart::getContent() as $productos){

            $detalle_venta= new Detalle();

            $libro= libro::find($productos->id);

            $detalle_venta->pedido_id= $registro->id;
            $detalle_venta->libro_id= $libro->id;
            $detalle_venta->precio= $productos->price;
            $detalle_venta->cantidad_producto= $productos->quantity;

            $detalle_venta->save();

            $libro->cantidad_producto=($libro->cantidad_producto - $productos->quantity);

            $libro->save();
        }

        $details= 'articulos comprados con el id'.$registro->id;


        Mail::to(auth()->user()->email)->send( new TestMail($details));

        Cart::clear();
        return redirect()->route('carrito.index')->with('agregado', 'ok');
    }

}
