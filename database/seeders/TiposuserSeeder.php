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
        DB::table('tiposusers')->insert(['descripcion' => 'Dueño ']);
        DB::table('tiposusers')->insert(['descripcion' => 'Usuario Común']);
        DB::table('tiposusers')->insert(['descripcion' => 'Visitante']);
    }
}
