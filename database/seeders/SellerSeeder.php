<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->insert([
            ['seller_name' => 'Crorecords', 'IBAN' => 'HR3724020062163969743', 'SWIFT' => 'PBZGHR23421'],
            ['seller_name' => 'Slorecords', 'IBAN' => 'SI23892953196192132', 'SWIFT' => 'PBZGSI25552'],
            ['seller_name' => 'Serbrecords', 'IBAN' => 'RS43892953196192333', 'SWIFT' => 'PBZGRS23335'],
 
        ]);
    }
}
