<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                "name" => "Romance",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Science fiction",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Comedy/drama",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Horror/Comedy",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Comedy",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            [
                "name" => "Fantasy",
                'created_at' => Date::now(),
                'updated_at' => Date::now()
            ],
            
                [
                    "name" => "Drama",
                    
                    "created_at" => "2023-04-05 10:16:14",
                    "updated_at" => "2023-04-05 10:16:17",
                    
                ],
                [
                    "name" => "Crime/drama",
                    
                    "created_at" => "2023-04-05 10:16:16",
                    "updated_at" => "2023-04-05 10:16:18",
                    
                ],
                [
                    "name" => "Action",
                    
                    "created_at" => "2023-04-05 10:16:55",
                    "updated_at" => "2023-04-05 10:16:56",
                    
                ],
                [
                    "name" => "Adventure",
                    
                    "created_at" => "2023-04-05 10:17:09",
                    "updated_at" => "2023-04-05 10:17:10",
                    
                ],
                [
                    "name" => "War",
                    
                    "created_at" => "2023-04-05 10:18:35",
                    "updated_at" => "2023-04-05 10:18:36",
                    
                ]
        ]);
    }
}
