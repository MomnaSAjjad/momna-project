<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
class CreateSuperUserSeeder extends Seeder{
    /*** Run the database seeds.** @return void*/
    public function run(){
        $user = User::create([
            'name' => 'Super User',
            'username' => 'superuser',
            'company' => 'Uppsagt',
            'email' => 'info@lomo.com.ua',
            'password' => bcrypt('230594')
        ]);
        $role = Role::create(['name' => 'Superuser']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}

