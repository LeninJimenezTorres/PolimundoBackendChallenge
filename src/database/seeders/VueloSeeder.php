<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Vuelo;

class VueloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vuelo::factory(25)->create();
        /*
        $vuelo_1 = new Vuelo();
        $vuelo_1->origen = "Peru";
        $vuelo_1->destino = "Ecuador";
        $vuelo_1->aeronave_code ="LanV12";
        $vuelo_1->save();

        $vuelo_2 = new Vuelo();
        $vuelo_2->origen = "Colombia";
        $vuelo_2->destino = "USA";
        $vuelo_2->aeronave_code ="LiancaC02";
        $vuelo_2->save();

        $vuelo_3 = new Vuelo();
        $vuelo_3->origen = "El Salvador";
        $vuelo_3->destino = "Argentina";
        $vuelo_3->aeronave_code ="OlpB15";
        $vuelo_3->save();
        */
    }
}
