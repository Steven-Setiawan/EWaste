<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('PSadmin1'),
                'role' => 'admin',
                'photo' => 'img/user/admin1.jpeg',
                'gender' => 'male',
                'DOB' => '2002-10-16',
                'cities_id' => 1,
                'address' => 'Jl. Kebayoran Lama No.52'
            ],
            [
                'name' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('PSuser1'),
                'role' => 'user',
                'photo' => 'img/user/user1.jpeg',
                'gender' => 'male',
                'DOB' => '2003-11-08',
                'cities_id' => 1,
                'address' => 'Jl. Utama Raya No.9'
            ]
        ];

        DB::table('users')->insert($users);
    }
}
