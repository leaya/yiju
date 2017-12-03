<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(TCG\Voyager\Models\Post::class, function (Faker $faker) {
    $time = Carbon::now()->toDateTimeString();
    return [
        'title' => $faker->sentence(3),
        'seo_title' => $faker->sentence(),
        'excerpt' => $faker->sentence(),
        'body' => $faker->text(),
        'image' => 'posts/post' . random_int(1, 4) . '.jpg',
        'slug' => $faker->slug(),
        'status' => 'PUBLISHED',
        'featured' => 0,
        'created_at' => $time,
        'updated_at' => $time,
    ];
});
