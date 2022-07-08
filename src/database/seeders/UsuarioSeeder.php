<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::factory(25)->create();

        /*
        $usuario_1 = new Usuario();
        $usuario_1->nombre = "Elsa Montalvo";
        $usuario_1->nacionalidad = "Ecuatoriana";
        $usuario_1->pasaporte="12345678912";
        $usuario_1->save();

        $usuario_2 = new Usuario();
        $usuario_2->nombre = "Adair Morales";
        $usuario_2->nacionalidad = "Ecuatoriana";
        $usuario_2->pasaporte="12300000912";
        $usuario_2->save();

        $usuario_3 = new Usuario();
        $usuario_3->nombre = "Eduardo Torres";
        $usuario_3->nacionalidad = "Ecuatoriana";
        $usuario_3->pasaporte="457845678912";
        $usuario_3->save();
        */
    }
}
