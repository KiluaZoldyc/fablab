<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'name' => 'Kilua',
            'email' => 'kiluaws@gmail.com',
            'role' => 'admin',
            'password' => bcrypt(''),
            'settings' => '{"pagination": 8}',
        ]);

        User::create([
            'name' => 'Abonne',
            'email' => 'abonne@fablab.fr',
            'password' => bcrypt(''),
            'settings' => '{"pagination": 8}',
        ]);
    }
}
