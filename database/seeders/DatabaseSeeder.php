<?php

namespace Database\Seeders;

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
    }
}
