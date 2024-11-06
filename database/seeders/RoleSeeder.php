<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superuserRole = Role::create(['name' => 'superuser']);
        $adminRole = Role::create(['name' => 'admin']);
	$userRole = Role::create(['name' => 'user']);

        $permissions = Permission::all();
        foreach ($permissions as $permission) {
            $superuserRole->givePermissionTo($permission);
        }


        
        // $superuserRole->givePermissionTo('all');
    }
}
