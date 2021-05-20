<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelicula')->insert(['titulo' => 'La sirenita', 'director' => 'disney', 'valoracion' => '10', 'resena' => 'Buena pelicula para ninos', 'fecha_visto' => '19-05-2021',]);
        
    }
}
