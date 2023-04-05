<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Date;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('movies')->delete();

        DB::table('movies')->insert([[
                    "title" => "The Shawshank Redemption",
                    "description" => "Andy Dufresne, a successful banker, is arrested for the murders of his wife and her lover, and is sentenced to life imprisonment at the Shawshank prison. He becomes the most unconventional prisoner.",
                    "release_date" => "1994-09-22",
                    "runtime" => 144,
                    "rating" => "R",
                    "image" => "The Shawshank Redemption.PNG",
                    "created_at" => "2023-03-31 13:16:04",
                    "updated_at" => "2023-04-05 08:29:49",
                ],
                [
                    "title" => "The Godfather",
                    "description" => "Don Vito Corleone, head of a mafia family, decides to hand over his empire to his youngest son Michael. However, his decision unintentionally puts the lives of his loved ones in grave danger.",
                    "release_date" => "1972-03-24",
                    "runtime" => 175,
                    "rating" => "R",
                    "image" => "The Godfather.PNG",
                    "created_at" => "2023-03-31 13:16:04",
                    "updated_at" => "2023-04-05 11:37:36",
                ],
                [
                    "title" => "The Dark Knight",
                    "description" => "After Gordon, Dent and Batman begin an assault on Gotham's organised crime, the mobs hire the Joker, a psychopathic criminal mastermind who offers to kill Batman and bring the city to its knees.",
                    "release_date" => "2008-07-24",
                    "runtime" => 152,
                    "rating" => "PG-13",
                    "image" => "The Dark Knight.PNG",
                    "created_at" => "2023-03-31 13:16:04",
                    "updated_at" => "2023-04-05 11:40:48",
                ],
                [
                    "title" => "The Godfather Part II",
                    "description" => "Michael, Vito Corleone's son, attempts to expand his family's criminal empire. While he strikes a business deal with gangster Hyman Roth, he remains unaware of the lurking danger.",
                    "release_date" => "1974-12-20",
                    "runtime" => 202,
                    "rating" => "R",
                    "image" => "The Godfather Part II.PNG",
                    "created_at" => "2023-03-31 13:16:04",
                    "updated_at" => "2023-04-05 11:47:25",
                ],
                [
                    "title" => "12 Angry Men",
                    "description" => "A dissenting juror in a murder trial slowly manages to convince the others that the case is not as obviously clear as it seemed in court.",
                    "release_date" => "1957-12-12",
                    "runtime" => 96,
                    "rating" => "PG-13",
                    "image" => "12 Angry Men.PNG",
                    "created_at" => "2023-03-31 13:16:04",
                    "updated_at" => "2023-04-05 11:52:32",
                ],
                [
                    "title" => "Schindler's List",
                    "description" => "Oskar Schindler, a German industrialist and member of the Nazi party, tries to save his Jewish employees after witnessing the persecution of Jews in Poland.",
                    "release_date" => "1994-01-04",
                    "runtime" => 195,
                    "rating" => "R",
                    "image" => "Shindler's List.PNG",
                    "created_at" => "2023-03-31 13:16:04",
                    "updated_at" => "2023-04-05 11:56:09",
                ],
                [
                    "title" => "The Lord of the Rings: The Return of the King",
                    "description" => "The former Fellowship members prepare for the final battle. While Frodo and Sam approach Mount Doom to destroy the One Ring, they follow Gollum, unaware of the path he is leading them to.",
                    "release_date" => "2003-12-01",
                    "runtime" => 201,
                    "rating" => "PG-13",
                    "image" => "The Lord of the Rings The Return of the King.PNG",
                    "created_at" => "2023-04-02 12:34:01",
                    "updated_at" => "2023-04-05 11:58:38",
                ],
                [
                    "title" => "Pulp Fiction",
                    "description" => "In the realm of underworld, a series of incidents intertwines the lives of two Los Angeles mobsters, a gangster's wife, a boxer and two small-time criminals.",
                    "release_date" => "1994-11-14",
                    "runtime" => 154,
                    "rating" => "R",
                    "image" => "Pulp Fiction.PNG",
                    "created_at" => "2023-04-02 12:45:15",
                    "updated_at" => "2023-04-05 12:00:48",
                ]]
            );
    }
}