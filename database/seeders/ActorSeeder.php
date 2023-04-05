<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('actors')->delete();

        DB::table('actors')->insert([
                [
                    "first_name" => "Tim",
                    "last_name" => "Robbins",
                    "date_of_birth" => "1958-10-16",
                    "created_at" => "2023-04-05 08:07:09",
                    "updated_at" => "2023-04-05 08:07:09",
                ],
                [
                    "first_name" => "Morgan",
                    "last_name" => "Freeman",
                    "date_of_birth" => "1937-06-01",
                    "created_at" => "2023-04-05 08:07:36",
                    "updated_at" => "2023-04-05 08:07:36",
                ],
                [
                    "first_name" => "Marlon",
                    "last_name" => "Brando",
                    "date_of_birth" => "1924-04-03",
                    "created_at" => "2023-04-05 08:21:27",
                    "updated_at" => "2023-04-05 08:21:27",
                ],
                [
                    "first_name" => "Al",
                    "last_name" => "Pacino",
                    "date_of_birth" => "1940-04-25",
                    "created_at" => "2023-04-05 08:22:17",
                    "updated_at" => "2023-04-05 08:22:17",
                ],
                [
                    "first_name" => "Christian",
                    "last_name" => "Bale",
                    "date_of_birth" => "1974-01-30",
                    "created_at" => "2023-04-05 08:22:48",
                    "updated_at" => "2023-04-05 08:23:02",
                ],
                [
                    "first_name" => "Heath",
                    "last_name" => "Ledger",
                    "date_of_birth" => "1979-04-04",
                    "created_at" => "2023-04-05 08:23:25",
                    "updated_at" => "2023-04-05 08:23:25",
                ],
                [
                    "first_name" => "Robert",
                    "last_name" => "De Niro",
                    "date_of_birth" => "1943-12-08",
                    "created_at" => "2023-04-05 08:23:48",
                    "updated_at" => "2023-04-05 08:23:48",
                ],
                [
                    "first_name" => "Henry",
                    "last_name" => "Fonda",
                    "date_of_birth" => "1905-05-16",
                    "created_at" => "2023-04-05 08:24:13",
                    "updated_at" => "2023-04-05 08:24:13",
                ],
                [
                    "first_name" => "Lee",
                    "last_name" => "Cobb",
                    "date_of_birth" => "1911-08-12",
                    "created_at" => "2023-04-05 08:24:34",
                    "updated_at" => "2023-04-05 08:24:34",
                ],
                [
                    "first_name" => "Liam",
                    "last_name" => "Neeson",
                    "date_of_birth" => "1952-06-07",
                    "created_at" => "2023-04-05 08:25:02",
                    "updated_at" => "2023-04-05 08:25:02",
                ],
                [
                    "first_name" => "Ralph",
                    "last_name" => "Fiennes",
                    "date_of_birth" => "1962-12-22",
                    "created_at" => "2023-04-05 08:26:07",
                    "updated_at" => "2023-04-05 08:26:07",
                ],
                [
                    "first_name" => "Elijah",
                    "last_name" => "Wood",
                    "date_of_birth" => "1981-01-28",
                    "created_at" => "2023-04-05 08:26:36",
                    "updated_at" => "2023-04-05 08:26:36",
                ],
                [
                    "first_name" => "Viggo",
                    "last_name" => "Mortensen",
                    "date_of_birth" => "1958-10-20",
                    "created_at" => "2023-04-05 08:26:56",
                    "updated_at" => "2023-04-05 08:26:56",
                ],
                [
                    "first_name" => "John",
                    "last_name" => "Travolta",
                    "date_of_birth" => "1954-01-18",
                    "created_at" => "2023-04-05 08:27:19",
                    "updated_at" => "2023-04-05 08:27:19",
                ],
                [
                    "first_name" => "Uma",
                    "last_name" => "Thurman",
                    "date_of_birth" => "1970-04-29",
                    "created_at" => "2023-04-05 08:27:33",
                    "updated_at" => "2023-04-05 08:27:33",
                ]]
        );
    }
}