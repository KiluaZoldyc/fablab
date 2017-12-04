<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => '',
            'email' => '',
            'role' => 'admin',
            'password' => bcrypt(''),
            'settings' => '{"pagination": 8}',
        ]);

        User::create([
            'name' => '',
            'email' => '',
            'password' => bcrypt(''),
            'settings' => '{"pagination": 8}',
        ]);
    }
}
