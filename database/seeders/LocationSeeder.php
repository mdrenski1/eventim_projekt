<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            ['location_name' => 'Velesajam', 'city_id' => '1'],
            ['location_name' => 'Livada', 'city_id' => '2'],
            ['location_name' => 'Arena', 'city_id' => '3'],
        ]);
    }
}
