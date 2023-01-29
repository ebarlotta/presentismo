<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoivaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoivas')->insert(['descripcion' => 'Consumidor Final']);
        DB::table('tipoivas')->insert(['descripcion' => 'Responsable Inscripto']);
    }
}
