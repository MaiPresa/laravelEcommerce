<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
            ['id_roles' => '2', 'nombre_usuarios' => 'Yolanda', 'contrasena' => bcrypt('cicuta'), 'email' => 'yoli@gmail.com', 'telefono' => '123456789', 'direccion' => 'Calla La Palma 3', 'ciudad' => 'Oviedo', 'fecha_registro' => '2023-05-01 00:00:00'],
            ['id_roles' => '1', 'nombre_usuarios' => 'Sara', 'contrasena' => bcrypt('poyo'), 'email' => 'SaraP@gmail.com', 'telefono' => '223456789', 'direccion' => 'Calla Asturias 3', 'ciudad' => 'Oviedo', 'fecha_registro' => '2023-05-01 00:00:00']
        ]);
    }
}
