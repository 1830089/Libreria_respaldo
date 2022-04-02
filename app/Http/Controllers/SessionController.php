<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Cart;

class SessionController extends Controller
{
    public function create(){
        return view("login");
    }

    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'El correo o contraseña es incorrecto, porfavor intente nuevamente'
            ]);
        }else{
            if(auth()->user()->role == 'admin'){
                return redirect()->route('home-admin.index');
            }else{
                return redirect()->to('/');
            }
        }
        return redirect()->to('/');
    }

    public function destroy(){
        Cart::clear();
        auth()->logout();

        return redirect()->to('/');
    }
}
