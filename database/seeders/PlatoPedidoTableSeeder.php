<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatoPedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('plato_pedido')->insert([
            ['id_pedido' => 1, 'id_plato' => 9, 'cantidad_platos' => 2],
            ['id_pedido' => 1, 'id_plato' => 12, 'cantidad_platos' => 1],
            ['id_pedido' => 2, 'id_plato' => 16, 'cantidad_platos' => 3],
        ]);
    }
}
