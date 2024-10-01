<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Вызов всех сидеров
        
        $this->call([
            CountrySeeder::class,
            AirlineSeeder::class,
            AirportSeeder::class,
            FlightSeeder::class,
            BookingSeeder::class,
            PassengerSeeder::class,
            UserProfileSeeder::class,
            ServiceSeeder::class,
            BookingServiceSeeder::class,
        ]);
    }
}
