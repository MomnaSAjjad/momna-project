<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'Orest Levkiv',
            'name' => 'Orest Levkiv',
            'company' => 'Test',
            'email' => 'james.lviv@gmail.com',
            'password' => bcrypt('230594orest*')
        ]);
    }
}
