<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            ['ticket_price' => '1500', 'ticket_quantity' => '7', 'user_id' => '1'],
            ['ticket_price' => '2200', 'ticket_quantity' => '5', 'user_id' => '2'],
            ['ticket_price' => '3300', 'ticket_quantity' => '3', 'user_id' => '3'],
 
        ]);
    }
}
