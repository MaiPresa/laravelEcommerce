<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Usuario::class;

    public function definition()
    {
        return [
            'id_roles' => 2,
            'nombre_usuarios' => $this->faker->name,
            'contrasena' => bcrypt('password'),
            'email' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
            'direccion' => $this->faker->address,
            'ciudad' => $this->faker->city,
            'fecha_registro' => $this->faker->date(),
        ];
    }
}
