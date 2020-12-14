<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
         CountrySeeder::class,
         CitySeeder::class,
         LocationSeeder::class,
         GenreSeeder::class,
         PerformerSeeder::class,
         UserSeeder::class,
         TicketSeeder::class,
         Event_TypeSeeder::class,
         SellerSeeder::class,
         EventSeeder::class,
         InvoiceSeeder::class

        ]);
    }
}
