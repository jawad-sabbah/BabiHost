<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('properties')->insert([
        [
            'host_id' => 1,
            'name' => 'Seaside Villa',
            'description' => 'A beautiful villa by the sea.',
            'type' => 'Villa',
            'city' => 'Beirut',
            'address' => '123 Beach Road',
            'status' => 'active',
        ]
    ]);

    }
}
