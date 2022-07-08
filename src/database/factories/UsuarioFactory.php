<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
 
use App\Models\Usuario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->text(255),
            'nacionalidad'=>$this->faker->randomElement(['Ecuatoriano','Colombiano','Peruano','Boliviano','Venezolano']),
            'pasaporte'=>$this->faker->unique()->text(18),
        ];
    }
}
