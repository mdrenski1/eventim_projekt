<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Events')->insert([
            ['event_name' => 'Rokanje', 'event_date' => '2020-04-07', 'event_type_id' => '1', 'location_id' => '1', 'performer_id' => '1', 'user_id' => '1', 'seller_id' => '1'],
            ['event_name' => 'Duskanje', 'event_date' => '2020-05-07', 'event_type_id' => '2', 'location_id' => '2', 'performer_id' => '2', 'user_id' => '2', 'seller_id' => '2'],
            ['event_name' => 'Plesanje', 'event_date' => '2020-06-07', 'event_type_id' => '3', 'location_id' => '3', 'performer_id' => '3', 'user_id' => '3', 'seller_id' => '3']
 
        ]);
    }
}
