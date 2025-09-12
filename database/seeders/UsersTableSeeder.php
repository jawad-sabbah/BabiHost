<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('_users')->insert([
        [
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '78564782',
        ],
        [
            'name' => 'User',
            'email' => 'User@gmail.com',
            'password' => bcrypt('password'),
            'phone' => '0987654321',
        ]
    ]);

    }
}
