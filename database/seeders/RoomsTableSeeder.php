<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            [
                'property_id' => 1,
                'name' => 'Deluxe Suite',
                'type' => 'Suite',
                'price_per_night' => 250.00,
                'description' => 'A luxurious suite with a king-size bed, ocean view, and private balcony.',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'property_id' => 1,
                'name' => 'Standard Room',
                'type' => 'Standard',
                'price_per_night' => 100.00,
                'description' => 'A comfortable room with a queen-size bed and city view.',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
        ]);
    }
}
