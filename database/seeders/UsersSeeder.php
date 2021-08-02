<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Narine",
            'email' => "admin@gmail.com",
            'is_admin' => 1,
            'password' => Hash::make("narineadmin"),
        ]);

        DB::table('users')->insert([
            'name' => "NotAdmin",
            'email' => "else@gmail.com",
            'password' => Hash::make("narineadmin"),
        ]);
    }
}
