<?php

namespace Database\Seeders;
use App\Models\Personaje;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PersonajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('personajes')->insert(['actor_nombre' => 'Noah Centineo', 'personaje_nombre' => 'Peter',]);
        DB:: table('personajes')->insert(['actor_nombre' => 'Lana Condor', 'personaje_nombre' => 'Lara Jean',]);
        DB:: table('personajes')->insert(['actor_nombre' => 'Sam Sandler', 'personaje_nombre' => 'Dr. Danny',]);
        DB:: table('personajes')->insert(['actor_nombre' => 'Jennifer Aniston', 'personaje_nombre' => 'Katherine',]);
        DB:: table('personajes')->insert(['actor_nombre' => 'Jacob Elord', 'personaje_nombre' => 'Noah Flynn',]);
        DB:: table('personajes')->insert(['actor_nombre' => 'Joey King', 'personaje_nombre' => 'Elle Evans',]);
        
        
    }
}
