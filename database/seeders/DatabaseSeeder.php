<?php

namespace Database\Seeders;

use App\Models\autor;
use App\Models\categoria;
use App\Models\editorial;
use App\Models\libro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user= new User;
        $user->name= 'Admin';
        $user->email= 'admin@upv.edu.mx';
        $user->password= '1234';
        $user->role= 'admin';

        $user->save();

        $autor= new autor();
        $editorial= new editorial();
        $categoria= new categoria();
        $libro= new libro();

        //se agrega autor
        $autor->nombre_autor= 'ejemplo autor';
        $autor->save();

        //se agrega editorial
        $editorial->nombre_editorial= 'ejemplo editorial';
        $editorial->save();


        //se agrega categoria
        $categoria->nombre_categoria= 'ejemplo categoria';
        $categoria->save();


        //se agrega libro
        $libro->isbn= '192323232323';
        $libro->nombre_libro= 'ejemplo titulo';
        $libro->autor_id= 1;
        $libro->editorial_id= 1;
        $libro->categoria_id= 1;
        $libro->precio= 79.50;
        $libro->descripcion= "SIMONE DE BEAUVOIR, SIMONE WEIL, AYN RAND Y HANNAH ARENDT, CUATRO FILÓSOFAS LEGENDARIAS QUE LUCHARON POR NUESTRA LIBERTAD EN TIEMPOS OSCUROS. «Qué manera tan desenfadada, tan gozosa, de escribir sobre filosofía al más alto nivel.»";
        $libro->cantidad_producto= 20;
        $libro->ruta= 'https://www.gandhi.com.mx/media/catalog/product/9/7/9786073813532_06bd.jpg?optimize=high&bg-color=255,255,255&fit=bounds&height=478&width=300&canvas=300:478';

        $libro->save();
    }
}
