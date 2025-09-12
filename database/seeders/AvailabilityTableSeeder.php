<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AvailabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('availability')->insert([
            [
                'room_id' => 1,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'room_id' => 2,
                'is_available' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
