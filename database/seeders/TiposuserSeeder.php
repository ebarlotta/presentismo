<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TiposuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiposusers')->insert(['descripcion' => 'Ninguno']);
        DB::table('tiposusers')->insert(['descripcion' => 'Usuario Común']);
        DB::table('tiposusers')->insert(['descripcion' => 'Visitante']);
        DB::table('tiposusers')->insert(['descripcion' => 'Operario']);
        DB::table('tiposusers')->insert(['descripcion' => 'Administrador']);
        DB::table('tiposusers')->insert(['descripcion' => 'Dueño']);
    }
}
