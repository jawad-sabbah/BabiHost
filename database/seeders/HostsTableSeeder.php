<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hosts')->insert([
            [
                'user_id' => 1,
                'host_type' => 'Admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'host_type' => 'User',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
