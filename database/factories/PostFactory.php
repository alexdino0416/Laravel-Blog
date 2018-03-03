<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id' => rand(1, 30),
        'category_id' => rand(1, 20),
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(500),
        'excerpt' => $faker->text(200),
        'file' => $faker->imageUrl($width = 1200, $height = 400),
        'status' => $faker->randomElement(['DRAFT', 'PUBLISHED'])
    ];
});
