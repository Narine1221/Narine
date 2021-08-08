<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {

            DB::table('cars')->insert([
                'name' => Str::random(10),
                'model' => Str::random(10),
                'power' => mt_rand(10, 50),
                'km' => mt_rand(30000, 100000),
                'price' => mt_rand(20000, 80000),
                'year' => mt_rand(2000, 2021),
            ]);
        }
    }
}
