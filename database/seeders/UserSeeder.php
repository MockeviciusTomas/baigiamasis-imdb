<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            'first_name' => 'Tomas',
            'last_name' => 'Mockevičius',
            'email' => 'Tomas@test.com',
            'password' => Hash::make('password'),
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);
    }
}
