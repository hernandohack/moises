<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = Role::create(['name' => 'admin']);
        $invitado = Role::create(['name' => 'invitado']);

        $peradmin = Permission::create(['name' => 'todo']);
        $perinvitado = Permission::create(['name' => 'invitado']);

        $peradmin->syncRoles([$admin, $invitado]);
        $perinvitado->syncRoles($invitado);

    }
}
