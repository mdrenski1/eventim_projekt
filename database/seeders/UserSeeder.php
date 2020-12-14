<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [

            'first_name' => Str::random(5) . ' ' . Str::random(5),
            'last_name' => Str::random(5) . ' ' . Str::random(5),
            'email' => Str::random(10) . 'gmail.com',
            'password' => Hash::make('password')
            ]

        ]);
    }
}
