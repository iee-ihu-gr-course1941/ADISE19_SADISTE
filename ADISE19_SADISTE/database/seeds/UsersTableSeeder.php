<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

    public function run() {
        User::create([
            'name' => 'testuser',
            'email' => 'testuser@example.net',
            'username' => 'testuser',
            'password' => 'testuser'
        ]);
    }
}
