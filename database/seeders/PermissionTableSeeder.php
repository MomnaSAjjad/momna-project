<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
           'user-create',
           'user-edit',
           'user-delete',
           'contract-register',
           'contract-register-all',
           'contract-edit',
           'contract-edit-all',
           'contract-delete',
           'contract-delete-all',
           'contract-costs',
           'contract-costs-all',
           'contract-reminders',
           'contract-reminders-all',
           'contract-email',
           'contract-email-all',
           'see-all-categories',
           'role-create',
           'role-edit',
           'role-list',
           'role-delete',
        ];
        
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
