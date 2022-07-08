<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Vuelo;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vuelo>
 */
class VueloFactory extends Factory
{
    protected $model = Vuelo::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'origen'=>$this->faker->text(100),
            'destino'=>$this->faker->text(100),
            'aeronave_code'=>$this->faker->unique()->text(12),
        ];
    }
}
