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
            "name" => "Fr3",
            "website" => "https://www.france.tv/france-3/",
            "rate" => 587,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "name" => "La Deux",
            "website" => "https://www.rtbf.be/tv/ladeux/",
            "rate" => 723,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "name" => "La Une",
            "website" => "https://www.rtbf.be/tv/laune",
            "rate" => 234,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "name" => "DH",
            "website" => "http://www.dhnet.be/",
            "rate" => 456,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "name" => "M6",
            "website" => "https://www.6play.fr/m6",
            "rate" => 114,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "name" => "RTBF",
            "website" => "https://www.rtbf.be/",
            "rate" => 988,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "name" => "RTL",
            "website" => "https://www.rtl.be/info/index.htm",
            "rate" => 329,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "name" => "TF1",
            "website" => "https://www.tf1.fr/news",
            "rate" => 654,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "name" => "Le Monde",
            "website" => "https://www.lemonde.fr/",
            "rate" => 753,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
        DB::table('medias')->insert([
            "name" => "CNN",
            "website" => "https://edition.cnn.com/",
            "rate" => 854,
            "created_at" => $faker->dateTimeBetween('-3 years')
        ]);
    }

}