<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MediasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medias')->truncate();

        $faker = Faker::create();

        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "Fr3",
            "website" => "https://www.france.tv/france-3/",
            "up_votes" => 587,
            "down_votes" => 153,
            "logo" => "fr3.jpg",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "La Deux",
            "website" => "https://www.rtbf.be/tv/ladeux/",
            "up_votes" => 667,
            "down_votes" => 213,
            "logo" => "La2.png",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "La Une",
            "website" => "https://www.rtbf.be/tv/laune",
            "up_votes" => 50,
            "down_votes" => 473,
            "logo" => "laune.png",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "DH",
            "website" => "http://www.dhnet.be/",
            "up_votes" => 360,
            "down_votes" => 71,
            "logo" => "logo-dh.jpg",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "M6",
            "website" => "https://www.6play.fr/m6",
            "up_votes" => 369,
            "down_votes" => 756,
            "logo" => "M6.png",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "RTBF",
            "website" => "https://www.rtbf.be/",
            "up_votes" => 741,
            "down_votes" => 289,
            "logo" => "rtbf.jpg",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "RTL",
            "website" => "https://www.rtl.be/info/index.htm",
            "up_votes" => 165,
            "down_votes" => 432,
            "logo" => "rtl.jpg",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "TF1",
            "website" => "https://www.tf1.fr/news",
            "up_votes" => 421,
            "down_votes" => 138,
            "logo" => "tf1.jpg",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "Le Monde",
            "website" => "https://www.lemonde.fr/",
            "up_votes" => 869,
            "down_votes" => 357,
            "logo" => "le_monde-logo.jpg",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "user_id" => rand(1, 50),
            "name" => "CNN",
            "website" => "https://edition.cnn.com/",
            "up_votes" => 791,
            "down_votes" => 253,
            "logo" => "cnn-logo.jpg",
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
    }

}
