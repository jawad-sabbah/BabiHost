<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        [
                'property_id' => 1,
                'user_id' => 2,
                'rating' => 5,
                'comment' => 'Amazing stay!',
                'created_at' => now(),
                'updated_at' => now(),
        ];
            
    }
}
