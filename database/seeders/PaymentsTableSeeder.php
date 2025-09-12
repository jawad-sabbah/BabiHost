<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payments')->insert([
            [
                'booking_id' => 1,
                'amount' => 150,
                'payment_method' => 'Credit Card',
                'payment_status' => 'pending',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'booking_id' => 2,
                'amount' => 100,
                'payment_method' => 'Paypal',
                'payment_status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
