<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('performers')->insert([
            ['first_name' => 'Ivan', 'last_name' => 'Horvat', 'stage_name' => 'Ivo' , 'genre_id' => '1'],
            ['first_name' => 'Luka', 'last_name' => 'Lukic', 'stage_name' => 'Kalu' , 'genre_id' => '2'],
            ['first_name' => 'Pero', 'last_name' => 'Peric', 'stage_name' => 'Rope' , 'genre_id' => '3'],
 
        ]);
    }
}
