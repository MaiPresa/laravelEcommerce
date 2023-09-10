<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatoPedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedido_plato')->insert([
            ['id_pedido' => 7, 'id_plato' => 1, 'cantidad_platos' => 2],
            ['id_pedido' => 7, 'id_plato' => 5, 'cantidad_platos' => 1],
            ['id_pedido' => 8, 'id_plato' => 7, 'cantidad_platos' => 3],
        ]);
    }
}
