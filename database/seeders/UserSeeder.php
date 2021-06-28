<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Miguel Valencia',
            'email' => 'jose.valencia1204@alumnos.udg.mx',
            'password' => bcrypt('12345678')
        ])->assignRole('Admin');

        User::factory(9)->create();
    }
}
