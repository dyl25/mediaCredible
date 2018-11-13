<?php

use Faker\Generator as Faker;

$factory->define(App\Content::class, function (Faker $faker) {
    return [
        'media_id' => rand(1, 10),
        'user_id' => rand(1, 50),
        'title' => $faker->sentence(4),
        'url' => $faker->unique()->url,
        'url_image' => $faker->imageUrl,
        'up_votes' => rand(300, 900),
        'down_votes' => rand(300, 900),
        'created_at' => $faker->dateTimeBetween('-2 years')
    ];
});
