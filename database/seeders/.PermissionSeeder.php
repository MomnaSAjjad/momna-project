<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'user-create']);
        Permission::create(['name' => 'user-edit']);
        Permission::create(['name' => 'user-delete']);
        Permission::create(['name' => 'contract-register']);
        Permission::create(['name' => 'contract-register-all']);
        Permission::create(['name' => 'contract-edit']);
        Permission::create(['name' => 'contract-edit-all']);
        Permission::create(['name' => 'contract-delete']);
        Permission::create(['name' => 'contract-delete-all']);
        Permission::create(['name' => 'contract-costs']);
        Permission::create(['name' => 'contract-costs-all']);
        Permission::create(['name' => 'contract-reminders']);
        Permission::create(['name' => 'contract-reminders-all']);
        Permission::create(['name' => 'contract-email']);
        Permission::create(['name' => 'contract-email-all']);
        Permission::create(['name' => 'see-all-categories']);
        Permission::create(['name' => 'role-create']);
        Permission::create(['name' => 'role-edit']);
        Permission::create(['name' => 'role-list']);
        Permission::create(['name' => 'role-delete']);
    }
}
