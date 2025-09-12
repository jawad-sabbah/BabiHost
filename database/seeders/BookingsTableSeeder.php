<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('bookings')->insert([
            [
                'user_id' => 1,
                'room_id' => 2,
                'total_price' => 150,
                'check_in' => '2025-10-01',
                'check_out' => '2025-10-05',
                'status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'room_id' => 1,
                'total_price' => 100,
                'check_in' => '2025-10-10',
                'check_out' => '2025-10-12',
                'status' => 'confirmed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
