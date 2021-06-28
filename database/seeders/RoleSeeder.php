<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'pelicula.peliculaIndex'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'pelicula.peliculaCreate'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'pelicula.peliculaShow'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'pelicula.peliculaEdit'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'users.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.edit'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'comentario.comentarioIndex'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'comentario.comentarioCreate'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'comentario.comentarioShow'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'comentario.comentarioEdit'])->syncRoles([$role1, $role2]);
    }
}
