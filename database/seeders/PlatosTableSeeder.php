<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('platos')->insert([

        [
            'id_categoria' => 14, 
            'nombre_plato' => 'Edamames',
            'descripcion' => 'Nuestros deliciosos edamames preparados con una mezcla genuina de especias.',
            'precio' => 4.5, 
            'imagen' => 'images/Edamames.jpg'
        ],
        [
            'id_categoria' => 14, 
            'nombre_plato' => 'Ensalada Todo al Verde',
            'descripcion' => 'Ensalada con base de quinoa, brócoli, portobelos marinados y mucha, mucha albahaca.',
            'precio' => 9.5, 
            'imagen' => 'images/Ensalada.jpg'
        ],
        [
            'id_categoria' => 14, 
            'nombre_plato' => 'Guiso de la Abuela',
            'descripcion' => 'El guiso de toda la vida, hecho como toda la vida con carne de ternera asturiana.',
            'precio' => 10.5, 
            'imagen' => 'images/Guiso.jpg'
        ],
        [
            'id_categoria' => 15, 
            'nombre_plato' => 'Salmón',
            'descripcion' => 'Salmón a la plancha sobre una cama de rúcula, aderezado con pimientas y limón.',
            'precio' => 12.5, 
            'imagen' => 'images/Salmon.jpg'
        ],
        [
            'id_categoria' => 15, 
            'nombre_plato' => 'Poke Vegano',
            'descripcion' => 'Una base de quinoa y garbanzos con toppings de brotes frescos, aguacate, cherries y calabaza. Aderazado con nuestra salsa secreta.',
            'precio' => 10, 
            'imagen' => 'images/Poke.jpg'
        ],
        [
            'id_categoria' => 16, 
            'nombre_plato' => 'Tiramisú',
            'descripcion' => 'Nuestro postre más especial, un clásico tiramisú con café de especialidad de origen Colombia.',
            'precio' => 6, 
            'imagen' => 'images/Tiramisu.jpg'
        ],
        [
            'id_categoria' => 13, 
            'nombre_plato' => 'Limonada',
            'descripcion' => 'Fresca y sin azúcar.',
            'precio' => 3, 
            'imagen' => 'images/Limonada.jpg'
        ],
        [
            'id_categoria' => 13, 
            'nombre_plato' => 'Café V60',
            'descripcion' => 'Te preparanos nuestro café de especialidad en tolva de la semana en un filtrado V60',
            'precio' => 3.5, 
            'imagen' => 'images/Cafe.jpg'
        ]
        ]);
    }
}
