<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Traits\HasRoles;
class CreateAdminUserSeeder extends Seeder{
    /*** Run the database seeds.** @return void*/
    public function run(){
        $user = User::create([
            'name' => 'Orest Levkiv',
            'username' => 'orest',
            'company' => 'Uppsagt',
            'email' => 'james.lviv@gmail.com',
            'password' => bcrypt('230594')
        ]);
        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
