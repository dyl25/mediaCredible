<?php

use Faker\Generator as Faker;

$factory->define(App\Content::class, function (Faker $faker) {
    return [
        'media_id' => rand(1, 10),
        'title' => $faker->sentence(4),
        'url' => $faker->url,
        'url_image' => $faker->imageUrl,
        'rate' => rand(300, 900),
        'created_at' => $faker->dateTimeBetween('-2 years')
    ];
});
