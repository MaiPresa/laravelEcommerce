<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    protected $model = Pedido::class;

    public function definition()
    {
        $estados = ['enviado', 'preparando', 'entregado', 'cancelado'];
        $usuarioExistente = Usuario::inRandomOrder()->firstOrFail(); 

        return [
            'id_usuario' => $usuarioExistente->id_usuarios,
            'fecha_pedido' => $this->faker->dateTimeThisYear(), 
            'precio_total' => $this->faker->randomFloat(2, 5, 1000),
            'estado' => Arr::random($estados)
        ];
    }
}

