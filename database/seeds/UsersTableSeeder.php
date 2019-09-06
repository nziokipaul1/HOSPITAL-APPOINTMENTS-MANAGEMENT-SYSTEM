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
                'password'       => '$2y$10$4gydemKvfFiqz.umjCiRt.ZqgdNEc1aWYmk/cOOxgIylMf0h5cSz6',
                'remember_token' => null,
                'created_at'     => '2019-09-06 12:34:52',
                'updated_at'     => '2019-09-06 12:34:52',
                'phone_number'   => '',
            ],
        ];

        User::insert($users);
    }
}
