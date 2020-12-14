<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('invoices')->insert([
            ['number' => '1', 'fiscal_number' => '116242', 'date_out' => '2020-03-07', 'event_id' => '1', 'ticket_id' => '2', 'seller_id' => '3'],
            ['number' => '2', 'fiscal_number' => '115233', 'date_out' => '2020-05-22', 'event_id' => '1', 'ticket_id' => '2', 'seller_id' => '3'],
            ['number' => '3', 'fiscal_number' => '113555', 'date_out' => '2020-07-16', 'event_id' => '1', 'ticket_id' => '2', 'seller_id' => '3'],
 
        ]);
    }
}
