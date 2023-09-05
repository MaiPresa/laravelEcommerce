<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedidos')->insert([
            ['id_usuarios' => 1, 'fecha_pedido' => now(), 'precio_total' => 15.0, 'estado' => 'enviado'],
            ['id_usuarios' => 2, 'fecha_pedido' => now(), 'precio_total' => 20.0, 'estado' => 'preparando'],
        ]);
    }
}
