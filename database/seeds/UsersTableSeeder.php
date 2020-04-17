<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$bsMSLdfWc.xa1EP1eXB2a.7GOHr0EqQaJGXwjfgouWZ61xCUKPyFK',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
