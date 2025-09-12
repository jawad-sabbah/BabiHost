<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        UsersTableSeeder::class,
        HostsTableSeeder::class,
        PropertiesTableSeeder::class,
        RoomsTableSeeder::class,
        FavoritesTableSeeder::class,
        ReviewsTableSeeder::class,
        AvailabilityTableSeeder::class,
        BookingsTableSeeder::class,
        PaymentsTableSeeder::class,
    ]);

    }
}
